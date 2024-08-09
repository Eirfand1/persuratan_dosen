<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Nilai</title>
   <?php require_once "../src/Views/dosen/partial/header.php"?>
</head>
<body class="text-sm bg-gray-100">
   <?php
    require_once "../src/Views/dosen/partial/sidebar.php";
   ?>
   <div class="sm:ml-64 mx-auto overflow-hidden">
      <?php
         require_once "../src/Views/dosen/partial/navbar.php";
      ?>
   <h2 class="text-2xl m-2 mb-4 font-semibold">List Nilai</h2>
   <div class="p-4 m-2 bg-white overflow-x-auto">
      <a href="/dosen/tambahnilai" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-2 inline-block">Tambah data nilai</a>

      <table border="1" cellpadding="10" cellspacing="0" class="w-full text-left border"  id="myTable">
         <thead class="font-bold">
            <tr class="bg-gray-200 border-b">
               <td>No</td>
               <td>Nama Mahasiswa</td>
               <td>Nama Matkul</td>
               <td>Semester</td>
               <td>Nilai</td>
               <td>Nilai Akhir</td>
               <td>Action</td>
            </tr>
         </thead>
         <tbody>
            <?php
               foreach ($nilai as $k => $v) :
            ?>
            <tr class="border-b hover:bg-gray-50">
               <td class="p-3"><?=$k+1?></td>
               <td class="p-3"><?=$v['nama_mhs']?></td>
               <td class="p-3"><?=$v['nama_matkul']?></td>
               <td class="p-3"><?=$v['nama_semester']?></td>
               <td class="p-3"><?=$v['nilai']?></td>
               <td class="p-3"><?=$v['nilai_akhir']?></td>
               <td class="p-3 flex gap-1">
                  <a href="edit.php?id=<?=$v['nilai_id']?>" class="bg-yellow-300 hover:bg-yellow-400 p-2 rounded-sm">
                     <i class="fas fa-pencil-alt"></i>
                  </a>
                  <a href="delete.php?id=<?=$v['nilai_id']?>" class="bg-red-500 hover:bg-red-700 p-2 rounded-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                     <i class="fas fa-trash"></i> 
                  </a>
               </td>
            </tr>
            <?php endforeach?>

         </tbody>

      </table>
   </div>
    
  </div>
<?php 
require_once "../src/Views/dosen/partial/footer.php";
?>
