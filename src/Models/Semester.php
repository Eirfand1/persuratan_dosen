<?php
namespace App\Models;
class Semester extends Database {
   private $table;
   public function __construct() {
      parent::__construct();
      $this->table = "semester";
   }
   public function getAllSemesters() {
      $query = $this->conn->query("SELECT * FROM $this->table") or die($this->conn->error);
      return $query;
   }
}