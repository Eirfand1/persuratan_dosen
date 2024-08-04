<?php

class Nilai extends Database
{
    private $table = "nilai";
    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $data = $this->conn->query(
            "SELECT nilai.*,m.nama_mhs,mtl.nama_matkul,s.nama_semester 
                FROM nilai
                INNER JOIN mahasiswa as m ON m.mahasiswa_id = nilai.mahasiswa_id
                INNER JOIN matkul as mtl ON mtl.matkul_id = nilai.matkul_id
                INNER JOIN semester as s ON s.semester_id = nilai.semester_id"
        ) or die($this->conn->error);
        return $data;
    }

    public function create($data)
    {
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        return $this->conn->query("INSERT INTO $this->table ($columns) VALUES ($values)");
    }

    public function getNilaiById($id)
    {
        $dataNilai = $this->conn->query("SELECT * FROM $this->table WHERE nilai_id = '$id'");
        $data = mysqli_fetch_array($dataNilai);
        return $data;
    }

    public function update($data, $id)
    {
        return $this->conn->query("UPDATE $this->table 
        SET nilai = '" . $data["nilai"] . "',nilai_akhir = '" . $data["nilai_akhir"] . "',mahasiswa_id = '" . $data["mahasiswa_id"] . "',matkul_id = '" . $data["matkul_id"] . "',semester_id = '" . $data["semester_id"] . "'
        WHERE nilai_id = '$id'");
    }

    public function destroy($id)
    {
        return $this->conn->query("DELETE FROM $this->table WHERE nilai_id = '$id'");
    }

    public function getMhs()
    {
        return $this->conn->query("SELECT m.mahasiswa_id,m.nim,m.nama_mhs FROM mahasiswa as m");
    }

    public function getMatkul()
    {
        return $this->conn->query("SELECT * FROM matkul");
    }

    public function getSemester()
    {
        return $this->conn->query("SELECT * FROM semester");
    }
}
