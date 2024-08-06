<?php
require_once "../autoload.php";
$mahasiswa = new Mahasiswa();
$matkul = new Matkul();
$semester = new Semester();
$nilai = new Nilai();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah data Nilai</title>
</head>
<body>
   <h2>Tambah data Nilai</h2>
   <form action="" method="post">
      <table>
         <tr>
            <td>Nilai</td>
            <td><input type="number" name="nilai"></td>
         </tr>
         <tr>
            <td>Nilai Akhir</td>
            <td><input type="text" name="nilai_akhir"></td>
         </tr>
         <tr>
            <td>Mahasiswa</td>
            <td>
               <select name="mahasiswa_id" id="mahasiswa_id">
                  <option value="" hidden disabled selected>Pilih Mahasiswa</option>
                 <?php foreach( $mahasiswa->getAllMhs() as $k => $v): ?>
                 <option value="<?=$v['mahasiswa_id']?>"><?=$v['nama_mhs']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td>Mata Kuliah</td>
            <td>
               <select name="matkul_id" id="matkul_id">
                  <option value="" hidden disabled selected>Pilih Matkul</option>
                 <?php foreach( $matkul->all() as $k => $v): ?>
                 <option value="<?=$v['matkul_id']?>"><?=$v['nama_matkul']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td>Semester</td>
            <td>
               <select name="semester_id" id="semester_id">
                  <option value="" hidden disabled selected>Pilih semester</option>
                 <?php foreach( $semester->getAllSemesters() as $k => $v): ?>
                 <option value="<?=$v['semester_id']?>">Semester <?=$v['nama_semester']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td><button>Submit</button></td>
            <td><a href="index.php">Kembali</a></td>
         </tr>
      </table>
   </form>
   
</body>
</html>
<?php

if(@$_POST){
   $nilai->insert($_POST);
}