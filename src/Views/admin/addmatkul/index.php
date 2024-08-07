<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah matkul</title>
   <title>Matkul</title>
   <?php require_once "../src/Views/admin/partial/header.php"?>
   <style>
      td {
         padding: 5px;
      }
   </style>
</head>
<body class="bg-gray-100">
    <?php
    require_once "../src/Views/admin/partial/sidebar.php";
   ?>
   <div class="sm:ml-64 mx-auto overflow-hidden">
      <?php
         require_once "../src/Views/admin/partial/navbar.php";
      ?>
   <h2 class="text-2xl font-semibold m-3 p-2 ">Tambah data Matkul</h2>
   <div class="bg-white m-2 p-3">
      <form action="/admin/addmatkul" method="post" id="addMatkul" class="text-sm">
         <table class="w-full ">
            <tr>
               
               <td>Kode Matakuliah</td>
               <td><input type="text" name="code" class="w-full rounded h-9"></td>
            </tr>
            <tr>
               <td>Nama Matakuliah</td>
               <td><input type="text" name="name" class="w-full rounded h-9"></td>
            </tr>
         </table>
         <div class="flex justify-between m-2 mt-5">
             <button name="submit" class="bg-green-500 text-white px-2 py-1 border rounded">Tambah</button>
             <a href="mtklh" class="bg-red-500 text-white px-2 py-1 border rounded">Kembali</a>
         </div>
         </form>

   </div>
   
   </div>
   
   <script>
      document.getElementById('addMatkul').addEventListener('submit', (e)=>{
         return confirm("apakah anda yakin") ? '' : e.preventDefault();
      });
   </script>
<?php
require_once "../src/Views/admin/partial/footer.php";

