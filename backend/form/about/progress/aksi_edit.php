<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomer = $_POST['nomer'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE progress SET nama = '$nama', nomer = '$nomer',judul = '$judul', keterangan = '$keterangan' where ID = $id";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-progress.php';
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