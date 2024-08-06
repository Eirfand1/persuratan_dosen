<?php

class Mahasiswa extends Database {
   private $table;
   public function __construct() {
      parent::__construct();
      $this->table = "mahasiswa";
   }
   public function getAllMhs() {
      $query = $this->conn->query("SELECT * FROM mahasiswa") or die($this->conn->error);
      return $query;
   }

}