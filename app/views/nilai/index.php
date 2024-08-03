<?php
$title = "Daftar Nilai";
include '../partials/header.php';

$nilai = new Nilai();
if (isset($_POST["del"])) {
    $nilai_id = mysqli_real_escape_string($database->conn, $_POST["nilai_id"]);
    if ($nilai->destroy($nilai_id)) {
        echo "
        <script>
            alert('Berhasil Menghapus Nilai');
            window.location.href = '" . BASE_URL . "app/views/nilai/index.php'
        </script>
        ";
    }
}
?>
<a href="form-add.php">
    Tambah Nilai
</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Nama Matkul</th>
        <th>Semester</th>
        <th>Nilai</th>
        <th>Nilai Akhir</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($nilai->all() as $key => $value) :
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $value["nama_mhs"] ?></td>
            <td><?= $value["nama_matkul"] ?></td>
            <td><?= $value["nama_semester"] ?></td>
            <td><?= $value["nilai"] ?></td>
            <td><?= $value["nilai_akhir"] ?></td>
            <td>
                <form method="post" id="delMkl">
                    [<a href="form-edit.php?id=<?= $value["nilai_id"] ?>">Edit</a>]
                    [<a href="#" onclick="del()">Hapus</a>]
                    <input type="hidden" name="nilai_id" value="<?= $value["nilai_id"] ?>">
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