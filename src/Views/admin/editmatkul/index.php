<?php
// Ambil data dari controller
$result = $matkul->fetch_assoc();
$id_matkul = $result["matkul_id"];
$kode_matkul = $result['kode_matkul'];
$nama_matkul = $result['nama_matkul'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Matkul</title>
   <?php require_once "../src/Views/admin/partial/header.php" ?>
</head>
<body class="bg-gray-100">
   <?php
    require_once "../src/Views/admin/partial/navbar.php";
   ?>
   <div class="sm:ml-64 mx-auto overflow-hidden">
      <?php
         require_once "../src/Views/admin/partial/sidebar.php";
      ?>
   
      <h1 class="text-2xl font-semibold m-2">Edit Data Matkul</h1>
      <div class="m-2 p-3 bg-white">
         <form action="" method="post" id="editMatkul">
            <table class="w-full">
               <tr>
                  <td>Kode Matakuliah</td>
                  <td>
                     <input type="text" name="code" value="<?= htmlspecialchars($kode_matkul) ?>" disabled readonly class="h-9 bg-gray-200 rounded">
                  </td>
               </tr>
               <tr>
                  <td>Nama Matakuliah</td>
                  <td>
                     <input type="text" name="name" value="<?= htmlspecialchars($nama_matkul) ?>">
                  </td>
               </tr>
               <tr>
                  <td>
                     <button type="submit" name="submit">Edit</button>
                  </td>
                  <td>
                     <a href="/admin/mtklh">Kembali</a>
                  </td>
               </tr>
            </table>
         </form>
      </div>
</div>

   <script>
      document.getElementById('editMatkul').addEventListener('submit', (e) => {
         confirm("Apakah data sudah sesuai?") || e.preventDefault();
      });
   </script>
<?php

require_once "../src/Views/admin/partial/footer.php";
// Proses update data ketika form disubmit
if(@$_POST){
   if($matkul->edit($id_matkul, $_POST)){
       echo "<script>
         alert('Data berhasil di edit');
         window.location.href = 'index.php';
      </script>";
   }else{
      echo "<script>alert('Data gagal di edit')</script>";
   }
}
?>
