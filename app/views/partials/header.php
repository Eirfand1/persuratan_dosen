<?php
    include "../../autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <nav>
        [<a href="#">Dashboard</a>]
        [<a href="#">Mahasiswa</a>]
        [<a href="#">Dosen</a>]
        [<a href="<?= BASE_URL ?>app/views/matkul/index.php">Matkul</a>]
        [<a href="<?= BASE_URL ?>app/views/nilai/index.php">Nilai</a>]
    </nav>
    <br>
    
