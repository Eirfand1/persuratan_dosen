<?php
$title = "Edit Nilai";
include '../partials/header.php';

$nilai = new Nilai();
if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($database->conn, $_GET["id"]);
    $data = $nilai->getNilaiById($id);
}
if (isset($_POST["save"])) {
    if (!isset($_POST["mahasiswa"]) || !isset($_POST["matkul"]) || !isset($_POST["semester"])) {
        echo "
        <script>
            alert('Gagal Mengubah Nilai');
            window.location.href = '" . BASE_URL . "app/views/nilai/index.php'
        </script>
        ";
    } else {

        $id = mysqli_real_escape_string($database->conn, $_POST["id"]);
        $nilai_a = mysqli_real_escape_string($database->conn, $_POST["nilai"]);
        $nilai_akhir = mysqli_real_escape_string($database->conn, $_POST["nilai_akhir"]);
        $mahasiswa_id = mysqli_real_escape_string($database->conn, $_POST["mahasiswa"]);
        $matkul_id = mysqli_real_escape_string($database->conn, $_POST["matkul"]);
        $semester_id = mysqli_real_escape_string($database->conn, $_POST["semester"]);

        if ($nilai->update($nilai_a, $nilai_akhir, $mahasiswa_id, $matkul_id, $semester_id, $id)) {
            echo "
            <script>
                alert('Berhasil Mengubah Nilai');
                window.location.href = '" . BASE_URL . "app/views/nilai/index.php'
            </script>
            ";
        }
    }
}
?>
<form action="form-edit.php" method="post">
    <table>
        <tr>
            <td>
                <label for="mahasiswa">Mahasiswa</label>
            </td>
            <td>
                <select name="mahasiswa" id="mahasiswa_id">
                    <option selected disabled>--Pilih--</option>
                    <?php foreach ($nilai->getMhs() as $key => $value) : ?>
                        <option value="<?= $value["mahasiswa_id"] ?>" <?= !empty($_GET["id"]) ? ($value["mahasiswa_id"] === $data["mahasiswa_id"] ? 'selected' : '') : "" ?>><?= $value["nim"] ?> - <?= $value["nama_mhs"] ?></option>
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
                        <option value="<?= $value["matkul_id"] ?>" <?= !empty($_GET["id"]) ? ($value["matkul_id"] === $data["matkul_id"] ? 'selected' : '') : "" ?>><?= $value["kode_matkul"] ?> - <?= $value["nama_matkul"] ?></option>
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
                        <option value="<?= $value["semester_id"] ?>" <?= !empty($_GET["id"]) ? ($value["semester_id"] === $data["semester_id"] ? 'selected' : '') : "" ?>>Semester - <?= $value["nama_semester"] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nilai">Nilai <b>*(2.00)</b></label>
            </td>
            <td>
                <input type="text" name="nilai" id="nilai" maxlength="4" value="<?= !empty($_GET["id"]) ? $data["nilai"] : "" ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nilai_akhir">Nilai Akhir <b>*(2.00)</b></label>
            </td>
            <td>
                <input type="text" name="nilai_akhir" id="nilai_akhir" maxlength="4" value="<?= !empty($_GET["id"]) ? $data["nilai_akhir"] : "" ?>">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="save">Ubah</button>
            </td>
            <td>
                <a href="index.php">Kembali</a>
            </td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?= !empty($_GET["id"]) ? $data["nilai_id"] : "" ?>">
</form>
<?php
include '../partials/footer.php'
?>