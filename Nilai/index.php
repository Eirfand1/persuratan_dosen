<?php
require_once("../autoload.php");
$nilai = new Nilai();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Nilai</title>
</head>
<body>
   <h2>List Nilai</h2>
   <h3><a href="add.php">Tambah data nilai</a></h3>

  <table border="1" cellpadding="10" cellspacing="0">
   <thead>
      <tr>
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
         foreach ($nilai->all() as $k => $v) :
      ?>
      <tr>
         <td><?=$k+1?></td>
         <td><?=$v['nama_mhs']?></td>
         <td><?=$v['nama_matkul']?></td>
         <td><?=$v['nama_semester']?></td>
         <td><?=$v['nilai']?></td>
         <td><?=$v['nilai_akhir']?></td>
         <td>
            <a href="">[Delete]</a>
            <a href="">[Edit]</a>
         </td>
      </tr>
      <?php endforeach?>

   </tbody>

  </table> 
</body>
</html>