<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nomer = $_POST['nomer'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO progress (nama,nomer,judul,keterangan) values ('$nama','$nomer','$judul','$keterangan')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../pages-progress.php';
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Ditambah!");
                window.location = 'form_tambah.php';
            </script>
        <?php
        }
    }
?>