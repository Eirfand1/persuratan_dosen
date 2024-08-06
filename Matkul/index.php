<?php
require_once("../autoload.php");

$matkul = new Matkul();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Matkul</title>
</head>
<body>
   <h4><a href="add.php">Tambah Matkul</a></h4>
   <table border="1" cellpadding="10" cellspacing="0">
      <thead>
         <tr>
            <th>No</th>
            <th>Nama Matakuliah</th>
            <th>Kode mata kuliah</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php 
         foreach( $matkul->all() as $index => $value ) : 
         ?>
           <tr>
              <td><?=$index + 1?></td>
              <td><?= $value['nama_matkul'] ?></td>
              <td><?= $value['kode_matkul'] ?></td>
              <td>
               <a href="edit.php?id=<?= $value['matkul_id'] ?>">[Edit]</a>
               <a href="?del=<?= $value['matkul_id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">[Hapus]</a>
             </td>
         <?php endforeach ?>
           </tr>
      </tbody>
   </table> 
   <script>
   //   document.querySelectorAll('.del').forEach(function(link) {
   //       link.addEventListener('click', function(e) {
   //          if (!confirm("Apakah anda yakin?")) {
   //             e.preventDefault();
   //          }
   //       });
   //    }); 

   </script>
</body>
</html>
<?php 
if(isset($_GET['del'])){
   $id = $_GET['del'];
   if($matkul->delete($id)){
      echo "<script>
             alert('Data matkul berhasil di hapus');
             window.location.href = 'index.php'
             </script>";
   }else{
      echo "<script>
             alert('Data matkul gagal di hapus');
             window.location.href = 'index.php'
             </script>";
   }
}