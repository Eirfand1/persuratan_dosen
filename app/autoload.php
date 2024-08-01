<?php 
include("Config/database.php");

// Load semua class yg ada di /model
// Arrow function cik
spl_autoload_register(fn($class) => 
   require_once 'Model/'.$class.'.php'
);