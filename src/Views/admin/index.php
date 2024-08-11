<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?php require_once "../src/Views/admin/partial/header.php"?>
</head>
<body class="bg-gray-100">
    <?php
    require_once "../src/Views/admin/partial/sidebar.php";
    ?>
  <div class="sm:ml-64 mx-auto overflow-hidden">
     <?php
       require_once "../src/Views/admin/partial/navbar.php";
     ?>
    <h1 class="text-2xl font-bold  my-2 mx-2">Dashboard</h1>
    <div class="flex justify-around mt-8 gap-2 mx-2">
      <div class="bg-white rounded-sm p-6 shadow-md hover:shadow-lg transition-shadow duration-300 text-center">
        <p class="text-xl font-semibold text-gray-700 mb-2">Jumlah Mahasiswa</p>
        <p class="text-3xl font-bold text-blue-600"><?= $mhs ?></p>
      </div>
      <div class="bg-white rounded-sm p-6 shadow-md hover:shadow-lg transition-shadow duration-300 text-center">
        <p class="text-xl font-semibold text-gray-700 mb-2">Jumlah Matkul</p>
        <p class="text-3xl font-bold text-blue-600"><?= $matkul ?></p>
      </div>
    </div>
  </div>
<?php
require_once "../src/Views/admin/partial/footer.php";
?>
</body>
</html>