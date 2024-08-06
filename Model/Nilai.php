<?php

class Nilai extends Database {
   private $table;
   public function __construct() {
      parent::__construct();
      $this->table = "nilai";
   }
   public function all(){
      $data = $this->conn->query("SELECT nilai.*, mahasiswa.nama_mhs, matkul.nama_matkul, semester.nama_semester FROM $this->table
      INNER JOIN mahasiswa ON nilai.mahasiswa_id=mahasiswa.mahasiswa_id
      INNER JOIN matkul ON nilai.matkul_id=matkul.matkul_id 
      INNER JOIN semester ON nilai.semester_id=semester.semester_id
      ") or die($this->conn->error);
      return $data;
   }
   public function insert($data){
      $nilai = $data['nilai'];
      $nilai_akhir = $data['nilai_akhir'];
      $mahasiswa_id = $data['mahasiswa_id'];
      $matkul_id = $data['matkul_id'];
      $semester_id = $data['semester_id'];
      return $this->conn->query("INSERT INTO nilai (nilai,nilai_akhir,mahasiswa_id,matkul_id,semester_id) VALUE
      ('$nilai','$nilai_akhir','$mahasiswa_id','$matkul_id','$semester_id') 
       ") or die($this->conn->error); 
   }
}
