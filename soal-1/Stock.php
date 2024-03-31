<?php

class Stock
{

  private $db = null;

  public function __construct()
  {
    $instanceDB = new Database();

    $this->db = $instanceDB;
  }

  public function selectAll()
  {
    $result = $this->db->select('SELECT * FROM stock');
    return $result;
  }
}
