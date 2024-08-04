<?php
$title = "Tambah Nilai";
include '../partials/header.php';

$nilai = new Nilai();
if (isset($_POST["save"])) {
    if (!isset($_POST["mahasiswa"]) || !isset($_POST["matkul"]) || !isset($_POST["semester"])) {
        echo "
        <script>
            alert('Gagal Menambahkan Nilai');
            window.location.href = '" . BASE_URL . "nilai/index.php'
        </script>
        ";
    } else {
        $data = [
            "nilai" => floatval(mysqli_real_escape_string($database->conn, $_POST["nilai"])),
            "nilai_akhir" => floatval(mysqli_real_escape_string($database->conn, $_POST["nilai_akhir"])),
            "mahasiswa_id" => mysqli_real_escape_string($database->conn, $_POST["mahasiswa"]),
            "matkul_id" => mysqli_real_escape_string($database->conn, $_POST["matkul"]),
            "semester_id" => mysqli_real_escape_string($database->conn, $_POST["semester"]),
        ];

        if ($nilai->create($data)) {
            echo "
            <script>
                alert('Berhasil Menambahkan Nilai');
                window.location.href = '" . BASE_URL . "nilai/index.php'
            </script>
            ";
        }
    }
}
?>
<form action="form-add.php" method="post">
    <table>
        <tr>
            <td>
                <label for="mahasiswa">Mahasiswa</label>
            </td>
            <td>
                <select name="mahasiswa" id="mahasiswa_id">
                    <option selected disabled>--Pilih--</option>
                    <?php foreach ($nilai->getMhs() as $key => $value) : ?>
                        <option value="<?= $value["mahasiswa_id"] ?>"><?= $value["nim"] ?> - <?= $value["nama_mhs"] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="matkul">Matakuliah</label>
            </td>
            <td>
                <select name="matkul" id="matkul">
                    <option selected disabled>--Pilih--</option>
                    <?php foreach ($nilai->getMatkul() as $key => $value) : ?>
                        <option value="<?= $value["matkul_id"] ?>"><?= $value["kode_matkul"] ?> - <?= $value["nama_matkul"] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="semester">Semester</label>
            </td>
            <td>
                <select name="semester" id="semester">
                    <option selected disabled>--Pilih--</option>
                    <?php foreach ($nilai->getSemester() as $key => $value) : ?>
                        <option value="<?= $value["semester_id"] ?>">Semester - <?= $value["nama_semester"] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nilai">Nilai <b>*(2.00)</b></label>
            </td>
            <td>
                <input type="text" name="nilai" id="nilai" maxlength="4">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nilai_akhir">Nilai Akhir <b>*(2.00)</b></label>
            </td>
            <td>
                <input type="text" name="nilai_akhir" id="nilai_akhir" maxlength="4">
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