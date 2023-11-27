<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $nama = $_POST['nama'];
    $logo = $_POST['logo'];

        $sql = "INSERT INTO fitur (judul,keterangan,nama,logo) values ('$judul','$keterangan','$nama','$logo')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../pages-fitur.php';
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