<?php
require_once("Config/Database.php");
spl_autoload_register(
   fn ($class) =>
   require_once 'Model/' . $class . '.php'
);