<?php

namespace App\Models;

use mysqli;
use mysqli_sql_exception;

class Database
{
    public $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db   = 'persuratan_dosen';
        $user = 'root';
        $pass = '';

        $this->conn = mysqli_connect($host, $user, $pass, $db);
        if($this->conn->connect_error) {
         die('Koneksi error karena :'. $this->conn->connect_error);
      }
    }
}