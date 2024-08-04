<?php
$title = "Daftar Matkul";
include '../partials/header.php';

$matkul = new Matkul();
if (isset($_POST["del"])) {
    $matkul_id = mysqli_real_escape_string($database->conn, $_POST["matkul_id"]);
    if ($matkul->destroy($matkul_id)) {
        echo "
        <script>
            alert('Berhasil Menghapus Matkul');
            window.location.href = '" . BASE_URL . "matkul/index.php'
        </script>
        ";
    }
}
?>
<a href="form-add.php">
    Tambah Matkul
</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Matakuliah</th>
        <th>Kode Matakuliah</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($matkul->all() as $key => $value) :
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $value["nama_matkul"] ?></td>
            <td><?= $value["kode_matkul"] ?></td>
            <td>
                <form method="post" id="delMkl">
                    [<a href="form-edit.php?id=<?= $value["matkul_id"] ?>">Edit</a>]
                    [<a href="#" onclick="del()">Hapus</a>]
                    <input type="hidden" name="matkul_id" value="<?= $value["matkul_id"] ?>">
                    <input type="hidden" name="del">
                </form>
            </td>
        </tr>
    <?php
        $no++;
    endforeach;
    ?>
</table>

<script>
    function del() {
        var conf = confirm("Yakin ingin menghapus data ini?");
        if (conf === true) {
            document.getElementById("delMkl").submit()
        }
    }
</script>
<?php
include '../partials/footer.php'
?>