<?php require_once "../autoload.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method="post" id="addMatkul">
   <h2>Tambah data Matkul</h2>
   <table>
      <tr>
         
         <td>Kode Matakuliah</td>
         <td><input type="text" name="code"></td>
      </tr>
      <tr>
         <td>Nama Matakuliah</td>
         <td><input type="text" name="name"></td>
      </tr>
      <tr>
         <td><button name="submit">Tambah</button></td>
         <td><a href="index.php">Kembali</a></td>
      </tr>
   </table>
   </form>
   
   <script>
      document.getElementById('addMatkul').addEventListener('submit', (e)=>{
         return confirm("apakah anda yakin") ? '' : e.preventDefault();
      });
   </script>
</body>
</html>


<?php
$matkul = new Matkul();

if(@$_POST){
   $data = $_POST;
   if($matkul->insert($data)){
      echo "<script>alert('Berhasil! menambahkan Matkul')
         window.location.href = 'index.php' 
      </script>";
   }else{
      echo "<script>alert('Gagal! menambahkan Matkul')</script>";
   }
}

