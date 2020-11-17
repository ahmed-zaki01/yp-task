<?php

class Companies

{

  use CompaniesTrait;

  private $db;
  private $table = "companies";

  public function __construct()
  {
    $this->db = new DB();
  }

  public function getAllCompanies()
  {
    return $this->db->connect()->get($this->table);
  }

  public function insertCompany($data)
  {
    $connection = $this->db->connect();
    $connection->insert($this->table, $data);
    return $connection->getInsertId();
  }

  public function updateCompany($id, $data)
  {
    return $this->db->connect()->where('id', $id)->update($this->table, $data);
  }

  public function getCompany($id)
  {
    return $this->db->connect()->where('id', $id)->getOne($this->table);
  }

  public function getCompanyArea($areaId)
  {
    return $this->db->connect()->where('area_id', $areaId)->join('areas', 'companies.area_id=areas.id', 'inner')->getOne($this->table);
  }

  public function deleteCompany($id)
  {
    $this->db->connect()->where('company_id', $id)->delete('categories_companies');
    return $this->db->connect()->where('id', $id)->delete($this->table);
  }
}
