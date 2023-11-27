<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $nama = $_POST['nama'];

    $sql = "SELECT * FROM review where id = $id";
    $conn->query($sql);
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();
    $path = './file/';

    if ($_FILES['foto']['error'] !== 4) {
        //if (isset ($_FILES ['foto_SISWA'])) {
        //untuk file
        $foto = $_FILES['foto'];
        $nama_gambar = time() . $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];

        if (file_exists($path . $row['foto'])) {
            unlink($path . $row['foto']);
        }

        if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
            $sql = "UPDATE review SET judul = '$judul', keterangan = '$keterangan', nama = '$nama', foto = '$nama_gambar' where ID = $id";
            var_dump($sql);
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
                    window.location = 'form_edit.php';
                </script>
            <?php
            }
        }
        //}
    } else {
        $sql = "UPDATE review SET judul = '$judul', keterangan = '$keterangan', nama = '$nama' where ID = $id";
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
                window.location = 'form_edit.php';
            </script>
<?php
        }
    }
}
?>

