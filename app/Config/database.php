<?php
class Database {
   private $host, $user, $password, $db;
   public $conn;

   public function __construct(){
      // $this->host = "127.0.0.1:6033";
      $this->host = "localhost";
      $this->user = "root";
      $this->password = '';
      $this->db = 'persuratan_dosen';

      $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db); 

      if($this->conn->connect_error) {
         die('Koneksi error karena :'. $this->conn->connect_error);
      }
   }
}

