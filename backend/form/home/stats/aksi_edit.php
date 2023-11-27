<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nomer = $_POST['nomer'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];

        $sql = "UPDATE stats SET nomer = '$nomer', nama = '$nama', keterangan = '$keterangan' where ID = $id";
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
                window.location = 'form_edit.php';
            </script>
<?php
        }
    }
?>