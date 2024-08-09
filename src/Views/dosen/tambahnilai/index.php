<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah data Nilai</title>
   <?php require_once "../src/Views/dosen/partial/header.php"?>
</head>
<body class="bg-gray-100">
<?php
    require_once "../src/Views/dosen/partial/sidebar.php";
   ?>
   <div class="sm:ml-64 mx-auto overflow-hidden">
      <?php
         require_once "../src/Views/dosen/partial/navbar.php";
      ?>
      <div class="m-2 bg-white p-3">
      <h2 class="text-2xl font-semibold">Tambah data Nilai</h2>
   <form action="" method="post">
      <table class="w-full">
         <tr>
            <td>Mahasiswa</td>
            <td>
               <select name="mahasiswa_id" id="mahasiswa_id" class="w-full rounded h-9">
                  <option value="" hidden disabled selected>Pilih Mahasiswa</option>
                 <?php foreach( $mahasiswa as $k => $v): ?>
                 <option value="<?=$v['mahasiswa_id']?>"><?=$v['nama_mhs']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td>Mata Kuliah</td>
            <td>
               <select name="matkul_id" id="matkul_id" class="w-full rounded h-9">
                  <option value="" hidden disabled selected>Pilih Matkul</option>
                 <?php foreach( $matkul as $k => $v): ?>
                 <option value="<?=$v['matkul_id']?>"><?=$v['nama_matkul']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td>Semester</td>
            <td>
               <select name="semester_id" id="semester_id" class="w-full rounded h-9">
                  <option value="" hidden disabled selected>Pilih semester</option>
                 <?php foreach( $semester as $k => $v): ?>
                 <option value="<?=$v['semester_id']?>">Semester <?=$v['nama_semester']?></option>
                 <?php endforeach?>
               </select>
            </td>
         </tr>
         <tr>
            <td>Nilai</td>
            <td><input type="number" name="nilai" class="w-full rounded h-9"></td>
         </tr>
         <tr>
            <td>Nilai Akhir</td>
            <td><input type="text" name="nilai_akhir" class="w-full rounded h-9"></td>
         </tr>
      </table>
      <div class="flex justify-between mt-3">
      <button class="bg-green-500 text-white px-2 py-1 border rounded">Submit</button>
      <a href="index.php" class="bg-red-500 text-white px-2 py-1 border rounded">Kembali</a>
      </div>
   </form>
   </div>

      </div>
   
   <?php
   require_once "../src/Views/dosen/partial/footer.php";
