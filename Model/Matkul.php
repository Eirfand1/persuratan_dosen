<?php
class Matkul extends Database {
   private $table;
   public function __construct() {
      parent::__construct();
      $this->table = 'matkul';
   }

   public function all(){
      return $this->conn->query("SELECT * FROM $this->table");
   }

   public function getById($id){
      return $this->conn->query("SELECT * FROM $this->table WHERE matkul_id = '$id'");
   }
   public function insert($data){
      $code = $data["code"];
      $name = $data["name"];
      $query = $this->conn->query("INSERT INTO $this->table (kode_matkul, nama_matkul) VALUE ('$code','$name')") or die(); 
      return $query;
      
   }
   public function delete($id){
      return $this->conn->query("DELETE FROM $this->table WHERE matkul_id = '$id'");
   }
   
   public function edit($id, $data){
      $name = $data["name"];
      return $this->conn->query("UPDATE $this->table SET nama_matkul = '$name' WHERE matkul_id = '$id'") or die();
   }

}
