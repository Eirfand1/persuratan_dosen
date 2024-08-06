<?php 
require_once("../autoload.php");
$matkul = new Matkul();
$id_matkul = $_GET['id']; 
$resultId = $matkul->getById($id_matkul);
$row = $resultId->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit matkul</title>
</head>
<body>
  <form action="" method="post" id="editMatkul">
   <h2>Edit data Matkul</h2>
   <table>
      <tr>
         <td>Kode Matakuliah</td>
         <td><input type="text" name="code" value="<?=$row['kode_matkul']?>" disabled readonly></td>
      </tr>
      <tr>
         <td>Nama Matakuliah</td>
         <td><input type="text" name="name" value="<?=$row['nama_matkul']?>"></td>
      </tr>
      <tr>
         <td><button name="submit">Edit</button></td>
         <td><a href="index.php">Kembali</a></td>
      </tr>
   </table>
   </form> 
   <script>
      document.getElementById('editMatkul').addEventListener('submit', (e)=>{
         confirm("apakah data sudah sesuai?") ? '' : e.preventDefault();
      });
   </script>
</body>
</html>
<?php

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