<?php

namespace App\Controllers;
use App\Controller;
use App\Models\Login;
class LoginController extends Controller{
   public $table;

   public function __construct(){
      $this->table = new Login;
   }
   public function index(){
      $this->render('login/index', ['login' => 'login']);
   }
   public function act(){

      $data = $_POST;
      $insert = $this->table->insert($data);
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
         if($insert == 'admin'){
            header("Location: /admin");
         }else if($insert == 'dosen'){
            header('Location: /dosen');
         }else{
            $this->render('login/index', ['error' => 'Invalid credentials']);
         }
      }
   }
}