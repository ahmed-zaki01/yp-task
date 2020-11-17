<?php

class Categories

{
    use CompaniesTrait;

    private $db;
    private $table = "categories";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function insertCategory($data)
    {
        return $this->db->connect()->insert($this->table, $data);
    }
}
