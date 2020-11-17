<?php

class CategoriesController extends Controller
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Categories();
    }


    public function index()
    {
        $data['categories'] = $this->conn->getAllCategories();
        return $this->view('categories/index', $data);
    }

    public function add()
    {
        return $this->view('categories/add');
    }

    public function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $this->conn = new Categories();
            $dataInsert = array("name" => $name);

            if ($this->conn->insertCategory($dataInsert)) {
                $data['success'] = "Data Added Successfully";
                return $this->view('categories/add', $data);
            } else {
                $data['error'] = "Error";
                return $this->view('categories/add', $data);
            }
        }
        return $this->view('categories/add');
    }
}
