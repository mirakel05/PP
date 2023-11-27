<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $keterangan2 = $_POST['keterangan2'];

    $sql = "SELECT * FROM banner where id = $id";
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
            $sql = "UPDATE banner SET nama = '$nama', keterangan = '$keterangan', keterangan2 = '$keterangan2', foto = '$nama_gambar' where ID = $id";
            var_dump($sql);
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../../pages-banner.php';
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
        $sql = "UPDATE banner SET nama = '$nama', keterangan = '$keterangan', keterangan2 = '$keterangan2' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../../pages-banner.php';
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