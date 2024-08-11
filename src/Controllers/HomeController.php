<?php

namespace App\Controllers;
use App\Models\Matkul;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Semester;

use App\Controller;

class HomeController extends Controller
{
    public function index(){
        header("Location: /login");
    }
    public function AdminIndex()
    {
        $mhs = new Mahasiswa();
        $matkul = new Matkul();
        $semester = new Semester();
        $resultSemester = $semester->getAllSemesters()->num_rows;
        $resultMatkul = $matkul->all()->num_rows;
        $resultMhs = $mhs->getAllMhs()->num_rows;

        $this->render('admin/index', ['user' => 'admin',
                                      'mhs'=> $resultMhs,
                                      'semester'=> $resultSemester,
                                      'matkul' => $resultMatkul
                                     ]);
        
    }
    public function DosenIndex(){
        $this->render('dosen/index', ['user'=>'dosen']);
    }
}