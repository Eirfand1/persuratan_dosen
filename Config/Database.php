<?php
class Database {
   private $host, $username, $password, $db;
   public $conn;
   public function __construct(){
      $this->host = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->db = "persuratan_dosen";

      $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db); 

      if($this->conn->connect_error) {
         die('Koneksi error karena :'. $this->conn->connect_error);
      }
   }
}
