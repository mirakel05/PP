<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $nama = $_POST['nama'];
    $logo = $_POST['logo'];

    $sql = "UPDATE fitur SET judul = '$judul', keterangan = '$keterangan', nama = '$nama', logo = '$logo' where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-fitur.php';
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