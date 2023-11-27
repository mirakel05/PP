<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM foto_stats where id = $id";
    $conn->query($sql);
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();
    $path = './file/';

    if ($_FILES['foto']['error'] !== 4) {
        $foto = $_FILES['foto'];
        $nama_gambar = time() . $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];

        if (file_exists($path . $row['foto'])) {
            unlink($path . $row['foto']);
        }

        if (move_uploaded_file($file_tmp, $path . $nama_gambar)) {
            $sql = "UPDATE foto_stats SET foto = '$nama_gambar' where ID = $id";
            var_dump($sql);
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../../pages-foto_stats.php';
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
}
?>

