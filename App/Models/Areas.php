<?php

class Areas

{

  use CompaniesTrait;

  private $db;
  private $table = "areas";

  public function __construct()
  {
    $this->db = new DB();
  }

  public function getCityAreas($id)
  {
    return $this->db->connect()->where('city_id', $id)->get($this->table);
  }

  public function getCityOfArea($areaId)
  {
    $area = $this->db->connect()->where('id', $areaId)->getOne($this->table);
    return $this->db->connect()->where('city_id', $area['city_id'])->join('cities', 'areas.city_id=cities.id', 'inner')->getOne($this->table);
  }
}
