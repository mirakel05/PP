<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $path = './file/';

    //untuk file
    $foto = $_FILES['foto'];
    $nama_gambar = time() . $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
        $sql = "INSERT INTO kegiatan (judul,nama,keterangan,foto) values ('$judul','$nama','$keterangan','$nama_gambar')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../pages-kegiatan.php';
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
} else {
    $sql = "INSERT INTO kegiatan (judul,nama,keterangan) values ('$judul','$nama','$keterangan')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-kegiatan.php';
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

