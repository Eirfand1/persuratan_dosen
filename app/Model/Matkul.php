<?php

class Matkul extends Database{
    private $table = "matkul";
    public function __construct()
    {
        parent::__construct();
    }


    public function all(){
        $data = $this->conn->query("SELECT * FROM $this->table") or die($this->conn->error);
        return $data;
    }

    public function create($kode_matkul,$nama_matkul){
        $kode_matkul = empty($kode_matkul) ? $this->generate_kode() : $kode_matkul;
        $insert = $this->conn->query("INSERT INTO $this->table (kode_matkul,nama_matkul) VALUES ('$kode_matkul','$nama_matkul')") or die($this->conn->error);
        return $insert;
    }

    public function getById($id){
        $matkul = $this->conn->query("SELECT * FROM $this->table WHERE matkul_id = '$id'") or die($this->conn->error);
        $data = mysqli_fetch_array($matkul);
        return $data;
    }

    public function editById($id, $nama_matkul){
        return $this->conn->query("UPDATE $this->table SET nama_matkul = '$nama_matkul' WHERE matkul_id = '$id'") or die($this->conn->error);
    }

    public function destroy($id){
        return $this->conn->query("DELETE FROM $this->table WHERE matkul_id = '$id'") or die($this->conn->error);
    }

    private function generate_kode(){
        $huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $kode = rand(00000,99999);
        $index = rand(0,strlen($huruf) - 1);
        $kode_acak = $huruf[$index] . $kode;

        return $kode_acak;
    }

}