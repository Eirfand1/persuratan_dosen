<?php
namespace App\Models;
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
      $nilai = $this->conn->real_escape_string($data['nilai']);
      $nilai_akhir = $this->conn->real_escape_string($data['nilai_akhir']);
      $mahasiswa_id = $this->conn->real_escape_string($data['mahasiswa_id']);
      $matkul_id = $this->conn->real_escape_string($data['matkul_id']);
      $semester_id = $this->conn->real_escape_string($data['semester_id']);
      
      $query = "INSERT INTO nilai (nilai, nilai_akhir, mahasiswa_id, matkul_id, semester_id) 
                VALUES ('$nilai', '$nilai_akhir', '$mahasiswa_id', '$matkul_id', '$semester_id')";
      
      return $this->conn->query($query) or die($this->conn->error);
   } 
}
