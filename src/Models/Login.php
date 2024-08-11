<?php
namespace App\Models;

class Login extends Database{
   protected $table;
   public function __construct(){
      parent::__construct();
      $this->table = 'users';
   }

   public function insert($data){
      $username = $data['username'];
      $password = $data['password'];

      $query = $this->conn->query("SELECT users.*, roles.nama_role
                FROM $this->table
                INNER JOIN roles ON users.role_id=roles.role_id
                WHERE users.nama_user = '$username' AND users.password = '$password'" );
                 

      if($query->num_rows > 0){
         $result = $query->fetch_assoc();
         return ($result["nama_role"] == 'Admin') ? 'admin' : 'dosen';
      }
      return 0;
   }
} 