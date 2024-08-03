<?php
include("Config/database.php");
define("BASE_URL", "http://127.0.0.1:8000/");
//define("BASE_URL", "http://localhost/");
$database = new Database();
// Load semua class yg ada di /model
// Arrow function cik
spl_autoload_register(
   fn ($class) =>
   require_once 'Model/' . $class . '.php'
);
