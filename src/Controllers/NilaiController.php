<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Matkul;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Semester;

class NilaiController extends Controller{
   public $table;
   public function __construct(){
      $this->table = new Nilai();
   }
   public function index(){
      
      $nilai = $this->table->all();
      $this->render('dosen/nilai/index', ['nilai' => $nilai]);
   } 
   public function addView(){
      $tb_semester = new Semester();
      $tb_matkul = new Matkul();
      $tb_mahasiswa = new Mahasiswa();

      $nilai = $this->table->all();
      $semester = $tb_semester->getAllSemesters();
      $matkul = $tb_matkul->all();
      $mahasiswa = $tb_mahasiswa->getAllMhs();

      $this->render('dosen/tambahnilai/index', ['nilai' => $nilai, 'semester'=> $semester,'matkul'=> $matkul,'mahasiswa'=> $mahasiswa]);
   } 
    public function add(){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $data = $_POST;
        if ($this->table->insert($data)) {
                echo "<script>alert('Berhasil! menambahkan Matkul');
                      window.location.href = '/dosen/nilai';
                      </script>";
            } else {
                echo "<script>alert('Gagal! menambahkan Matkul')</script>";
       }
      }
    }
    
}