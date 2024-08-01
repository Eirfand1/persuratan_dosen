<?php
$title = "Tambah Matkul";
include '../partials/header.php';

$matkul = new Matkul();
if(isset($_GET["id"])){
    $id = mysqli_real_escape_string($database->conn, $_GET["id"]);
    $data = $matkul->getById($id);
}

if(isset($_POST["ubah"])){
    $matkul_id = mysqli_real_escape_string($database->conn,$_POST["matkul_id"]);
    $nama_matkul = mysqli_real_escape_string($database->conn,$_POST["nama_matkul"]);

    if($matkul->editById($matkul_id,$nama_matkul)){
        echo "
        <script>
            alert('Berhasil Mengedit Matkul');
            window.location.href = '" . BASE_URL . "app/views/matkul/index.php'
        </script>
        ";
    }
}
?>
    <form action="form-edit.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="kode_matkul">Kode Matakuliah</label>
                </td>
                <td>
                    <input type="text" name="kode_matkul" id="kode_matkul" value="<?= !empty($_GET["id"]) ? $data["kode_matkul"] : "" ?>" disabled readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_matkul">Nama Matakuliah</label>
                </td>
                <td>
                    <input type="text" name="nama_matkul" id="nama_matkul" value="<?= !empty($_GET["id"]) ? $data["nama_matkul"] : "" ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="ubah">Ubah</button>
                </td>
                <td>
                    <a href="index.php">Kembali</a>
                </td>
            </tr>
        </table>
        <input type="hidden" name="matkul_id" value="<?= !empty($_GET["id"]) ? $data["matkul_id"] : "" ?>">
    </form>
<?php
include '../partials/footer.php'
?>