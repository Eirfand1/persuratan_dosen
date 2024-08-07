
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Matkul</title>
   <?php require_once "../src/Views/admin/partial/header.php"?>
</head>
<body class="bg-gray-100 text-sm">
   <?php
    require_once "../src/Views/admin/partial/navbar.php";
   ?>
   <div class="sm:ml-64 mx-auto overflow-hidden">
      <?php
         require_once "../src/Views/admin/partial/sidebar.php";
      ?>
      <h1 class="text-2xl font-semibold mb-4 text-gray-800 m-2">Daftar Matakuliah</h1>
      <div class="p-4 bg-white m-2 overflow-x-auto">
         <a href="addmatkul" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-2 inline-block ">Tambah Matkul</a>
         <table id="myTable" class="w-full text-left border ">
            <thead>
               <tr class="bg-gray-200 ">
                  <th class="p-3 ">No</th>
                  <th class="p-3">Nama Matakuliah</th>
                  <th class="p-3">Kode mata kuliah</th>
                  <th class="p-3">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php 
               foreach( $matkul as $index => $value ) : 
               ?>
               <tr class="border-b hover:bg-gray-50">
                  <td class="p-3"><?=$index + 1?></td>
                  <td class="p-3"><?= $value['nama_matkul'] ?></td>
                  <td class="p-3"><?= $value['kode_matkul'] ?></td>
                  <td class="p-3 flex gap-1">
                     <a href="editmatkul/<?= $value['matkul_id'] ?>" class="bg-yellow-300 hover:bg-yellow-500 p-2 rounded-sm"><i class="fas fa-pencil-alt"></i></a>
                     <a href="deletematkul/<?= $value['matkul_id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="bg-red-500 hover:bg-red-700 p-2 rounded-sm"><i class="fas fa-trash"></i> </a>
                  </td>
               </tr>
               <?php endforeach ?>
            </tbody>
         </table> 
      </div>
   </div>
<?php 
require_once "../src/Views/admin/partial/footer.php";
