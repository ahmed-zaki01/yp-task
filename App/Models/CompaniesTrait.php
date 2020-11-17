<?php

trait CompaniesTrait
{
  private $db;

  public function __construct()
  {
    $this->db = new DB();
  }

  public function getAllCategories()
  {
    return $this->db->connect()->get("categories");
  }

  public function getAllCities()
  {
    return $this->db->connect()->get("cities");
  }

  public function getAllAreas()
  {
    return $this->db->connect()->get("areas");
  }
}
