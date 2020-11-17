<?php

class Cities

{
  use CompaniesTrait;

  private $db;
  private $table = "cities";

  public function __construct()
  {
    $this->db = new DB();
  }
}
