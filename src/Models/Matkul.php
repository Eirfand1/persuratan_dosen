<?php

namespace App\Models;

class Matkul extends Database{
   private $table;
   public function __construct() {
      parent::__construct();
      $this->table = 'matkul';
   }

   public function all(){
      return $this->conn->query("SELECT * FROM $this->table");
   }

   public function getById($id){
      $id = $this->conn->real_escape_string($id);
      return $this->conn->query("SELECT * FROM $this->table WHERE matkul_id = '$id'");
   }

   public function insert($data){
      $code = $this->conn->real_escape_string($data["code"]);
      $name = $this->conn->real_escape_string($data["name"]);
      $query = $this->conn->query("INSERT INTO $this->table (kode_matkul, nama_matkul) VALUE ('$code','$name')") or die($this->conn->error); 
      return $query;
   }

   public function delete($id){
      $id = $this->conn->real_escape_string($id);
      return $this->conn->query("DELETE FROM $this->table WHERE matkul_id = '$id'");
   }
   
   public function edit($id, $data){
      $id = $this->conn->real_escape_string($id);
      $name = $this->conn->real_escape_string($data["name"]);
      return $this->conn->query("UPDATE $this->table SET nama_matkul = '$name' WHERE matkul_id = '$id'") or die($this->conn->error);
   }
} 