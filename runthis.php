<?php
class Runthis {
   private $username;
   private $password;
   private $db;
   private $host;

   public function __construct() {
      $this->host = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->db = "persuratan_dosen";
     
      // Create connection
      $conn = new mysqli($this->host, $this->username, $this->password);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
     
      // Create database
      $sql = "CREATE DATABASE IF NOT EXISTS " . $this->db;
      if ($conn->query($sql) === TRUE) {
         echo "Database created successfully or already exists<br>";
      } else {
         echo "Error creating database: " . $conn->error . "<br>";
      }
      $conn->close();
      $this->createTable();
   }
   
   public function createTable() {
      $conn = new mysqli($this->host, $this->username, $this->password, $this->db);
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
      $tables = [
            "CREATE TABLE IF NOT EXISTS roles (
               role_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               nama_role VARCHAR(50) NOT NULL
            )",
            "CREATE TABLE IF NOT EXISTS users (
               user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               nama_user VARCHAR(255) NOT NULL,
               email VARCHAR(255) NOT NULL,
               role_id INT NOT NULL,
               FOREIGN KEY (role_id) REFERENCES roles(role_id)
            )",
            "CREATE TABLE IF NOT EXISTS dosen (
               dosen_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               nidn VARCHAR(20) NOT NULL,
               nip_dsn VARCHAR(20) NOT NULL,
               nama_dsn VARCHAR(255) NOT NULL,
               alamat VARCHAR(255) NOT NULL,
               user_id INT NOT NULL,
               FOREIGN KEY (user_id) REFERENCES users(user_id)
            )",
            "CREATE TABLE IF NOT EXISTS matkul (
               matkul_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               kode_matkul VARCHAR(20) NOT NULL,
               nama_matkul VARCHAR(255) NOT NULL
            )",
            "CREATE TABLE IF NOT EXISTS mahasiswa (
               mahasiswa_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               nim VARCHAR(20) NOT NULL,
               nama_mhs VARCHAR(255) NOT NULL,
               alamat VARCHAR(255) NOT NULL,
               email VARCHAR(255) NOT NULL,
               no_telp VARCHAR(20) NOT NULL
            )",
            "CREATE TABLE IF NOT EXISTS semester (
               semester_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
               nama_semester VARCHAR(50) NOT NULL
            )"
        ];
      $success = true;
      foreach ($tables as $sql) {
         if ($conn->query($sql) === TRUE) {
            echo "Table created successfully<br>";
         } else {
            echo "Error creating table: " . $conn->error . "<br>";
            $success = false;
         }
      }
      if ($success) {
         echo "Semua tabel berhasil dibuat<br>";
      }
      $conn->close();
   }
}
new Runthis();