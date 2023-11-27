<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $nomer = $_POST['nomer'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO stats (nomer,nama,keterangan) values ('$nomer','$nama','$keterangan')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-stats.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan!");
            window.location = 'form_tambah.php';
        </script>
<?php
    }
}
?>