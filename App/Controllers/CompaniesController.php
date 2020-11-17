<?php

class CompaniesController extends Controller
{

  private $companyConn;
  private $companyCatsConn;
  private $areasConn;

  public function __construct()
  {
    $this->companyConn = new Companies();
    $this->companyCatsConn = new CompanyCategories();
    $this->areasConn = new Areas();
  }


  public function index()
  {
    $data['companies'] = $this->companyConn->getAllCompanies();
    return $this->view('companies/index', $data);
  }

  public function add()
  {
    $data['categories'] = $this->companyConn->getAllCategories();
    $data['cities'] = $this->companyConn->getAllCities();

    return $this->view('companies/add', $data);
  }

  public function store()
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $areaId = $_POST['area'];
      $companyCats = $_POST['categories'];

      $this->companyConn = new Companies();
      $this->companyCatsConn = new CompanyCategories();
      $dataInsert = array("name" => $name, "phone" => $phone, "area_id" => $areaId);


      if ($companyId = $this->companyConn->insertCompany($dataInsert)) {
        foreach ($companyCats as $companyCat) {
          $this->companyCatsConn->insertCompanyCategories([
            'category_id' => $companyCat,
            'company_id' => $companyId,
            'created_at' => date("Y/m/d h:i:sa")
          ]);
        }

        $data['success'] = "Data Added Successfully";
      } else {
        $data['error'] = "Error";
      }
      return $this->view('companies/add', $data);
    }
    return $this->view('companies/add');
  }

  public function getCityAreas($id)
  {
    $areas = $this->areasConn->getCityAreas($id);
    $areas = json_encode($areas);
    echo $areas;
  }

  public function edit($id)
  {
    $data['categories'] = $this->companyConn->getAllCategories();
    $data['cities'] = $this->companyConn->getAllCities();
    $data['company'] = $this->companyConn->getCompany($id);
    return $this->view("companies/edit", $data);
  }

  public function update($id)
  {
    if (isset($_POST['submit'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $areaId = $_POST['area'];
      $companyCats = $_POST['categories'];

      $this->companyConn = new Companies();
      $this->companyCatsConn = new CompanyCategories();
      $dataInsert = array("name" => $name, "phone" => $phone, "area_id" => $areaId);


      if ($this->companyConn->updateCompany($id, $dataInsert)) {
        $this->companyCatsConn->deleteCompanyCategories($id);
        foreach ($companyCats as $companyCat) {
          $this->companyCatsConn->insertCompanyCategories([
            'category_id' => $companyCat,
            'company_id' => $id,
            'created_at' => date("Y/m/d h:i:sa")
          ]);
        }

        $data['success'] = "Data Updated Successfully";
      } else {
        $data['error'] = "Error";
      }
      $data['companies'] = $this->companyConn->getAllCompanies();
      $data['categories'] = $this->companyConn->getAllCategories();
      $data['cities'] = $this->companyConn->getAllCities();
      return $this->view('companies/index', $data);
    }
    return $this->view('companies/edit');
  }


  public function viewCompany($id)
  {
    $data['company'] = $this->companyConn->getCompany($id);
    $data['area'] = $this->companyConn->getCompanyArea($data['company']['area_id']);
    $data['city'] = $this->areasConn->getCityOfArea($data['company']['area_id']);
    $data['categories'] = $this->companyCatsConn->getCompanyCategoriesById($id);
    return $this->view('companies/view', $data);
  }

  public function delete($id)
  {
    if ($this->companyConn->deleteCompany($id)) {

      $data['success'] = "Company Have Been Deleted";
    } else {
      $data['error'] = "Error";
    }
    $data['companies'] = $this->companyConn->getAllCompanies();
    return $this->view('companies/index', $data);
  }
}
