<?php
include '../../../../koneksi.php';
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $nama = $_POST['nama'];
    $path = './file/';

    //untuk file
    $foto = $_FILES['foto'];
    $nama_gambar = time() . $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
        $sql = "INSERT INTO review (judul,keterangan,nama,foto) values ('$judul','$keterangan','$nama','$nama_gambar')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../pages-review.php';
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
    $sql = "INSERT INTO review (judul,keterangan,nama) values ('$judul','$keterangan','$nama')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../pages-review.php';
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

