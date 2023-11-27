<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $logo = $_POST['logo'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE grid SET logo = '$logo', nama = '$nama', keterangan = '$keterangan' where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-grid.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan!");
            window.location = 'form_edit.php';
        </script>
<?php
    }
}
?>