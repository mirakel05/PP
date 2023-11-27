<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $logo = $_POST['logo'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO grid (logo,nama,keterangan) values ('$logo','$nama','$keterangan')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../pages-grid.php';
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