<?php
$title = "Tambah Matkul";
include '../partials/header.php';

$matkul = new Matkul();
if(isset($_POST["save"])){
    $kode_matkul = mysqli_real_escape_string($database->conn,$_POST["kode_matkul"]);
    $nama_matkul = mysqli_real_escape_string($database->conn,$_POST["nama_matkul"]);

    if($matkul->create($kode_matkul,$nama_matkul)){
        echo "
        <script>
            alert('Berhasil Menambahkan Matkul');
            window.location.href = '" . BASE_URL . "app/views/matkul/index.php'
        </script>
        ";
    }
}
?>
    <form action="form-add.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="kode_matkul">Kode Matakuliah <b>*Opsional</b></label>
                </td>
                <td>
                    <input type="text" name="kode_matkul" id="kode_matkul">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_matkul">Nama Matakuliah</label>
                </td>
                <td>
                    <input type="text" name="nama_matkul" id="nama_matkul">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="save">Simpan</button>
                </td>
                <td>
                    <a href="index.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
<?php
include '../partials/footer.php'
?>