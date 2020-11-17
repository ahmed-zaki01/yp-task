<?php

class CompanyCategories

{

  private $db;
  private $table = "categories_companies";

  public function __construct()
  {
    $this->db = new DB();
  }

  public function getCompanyCategories()
  {
    return $this->db->connect()->get($this->table);
  }

  public function insertCompanyCategories($data)
  {
    return $this->db->connect()->insert($this->table, $data);
  }

  public function updateCompanyCategories($id, $data)
  {
    return $this->db->connect()->where('company_id', $id)->update($this->table, $data);
  }

  public function getCompanyCategoriesById($id)
  {
    return $this->db->connect()->where('company_id', $id)->join('categories', 'categories_companies.category_id=categories.id', 'inner')->get($this->table);
  }

  public function deleteCompanyCategories($id)
  {
    $delete = $this->db->connect()->where('company_id', $id);
    return $delete->delete($this->table);
  }
}
