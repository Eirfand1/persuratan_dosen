<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Mahasiswa;
use App\Models\Matkul;

class MatkulController extends Controller{
   public $table;
   public function __construct(){
      $this->table = new Matkul();
   }
   public function index(){
      $matkul = $this->table->all();

      $this->render('admin/matkul/index', ['matkul' => $matkul]);
   } 

    public function edit($id) {
        $matkul = $this->table->getById($id);

        if (!$matkul) {
            echo "Mata kuliah dengan ID $id tidak ditemukan.";
            return;
        }

        $this->render('admin/editmatkul/index', ['matkul' => $matkul]);
    }
    public function add(){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = $_POST;
        if ($this->table->insert($data)) {
                echo "<script>alert('Berhasil! menambahkan Matkul');
                      window.location.href = '/admin/mtklh';
                      </script>";
            } else {
                echo "<script>alert('Gagal! menambahkan Matkul')</script>";
       }
      }
    }

    public function addView(){
        $this->render('admin/addmatkul/index',['']);
    }
    public function delete($id){
        $matkul = $this->table->delete($id);

        $this->render('admin/deletematkul/index',['delete' => $matkul]);
    }
}