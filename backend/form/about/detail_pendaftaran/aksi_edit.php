<?php
include '../../../../koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST ['nama'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $gol = $_POST ['gol'];
    $tb = $_POST ['tb'];
    $bb = $_POST ['bb'];
    $asal = $_POST ['asal'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $nisn = $_POST ['nisn'];
    $nama_wali = $_POST ['nama_wali'];
    $no_ortu = $_POST ['no_ortu'];
    $pekerjaan_ortu = $_POST ['pekerjaan_ortu'];
    $alamat = $_POST ['alamat'];

    $sql = "SELECT * FROM pendaftaran where id = $id";
    $conn->query($sql);
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();
    $path = './file/';

    if ($_FILES['files']['error'] !== 4) {
        //if (isset ($_FILES ['files_SISWA'])) {
        //untuk file
        $file = $_FILES['files'];
        $zip = time() . $_FILES['files']['name'];
        $file_tmp = $_FILES['files']['tmp_name'];

        if (file_exists($path . $row['files'])) {
            unlink($path . $row['files']);
        }

        if (move_uploaded_file($file_tmp, $path . $zip)) {
            $sql = "UPDATE pendaftaran SET  nama = '$nama',tanggal_lahir = '$tanggal_lahir',jenis_kelamin = '$jenis_kelamin',gol = '$gol' ,tb = '$tb',bb = '$bb',asal = '$asal',email = '$email',phone = '$phone',nisn ='$nisn',nama_wali = '$nama_wali',no_ortu = '$no_ortu',pekerjaan_ortu = '$pekerjaan_ortu',alamat = '$alamat',files = '$zip' where ID = $id";
            var_dump($sql);                                                                                                                                                                                                         
            $berhasil = ($conn->query($sql) === true);

            if ($berhasil) {
?>
                <script type="text/javascript">
                    alert("Data Berhasil Disimpan!");
                    window.location = '../../../pages-pendaftaran.php';
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
        $sql = "UPDATE pendaftaran SET  nama = '$nama',tanggal_lahir = '$tanggal_lahir',jenis_kelamin = '$jenis_kelamin',gol = '$gol' ,tb = '$tb',bb = '$bb',asal = '$asal',email = '$email',phone = '$phone',nisn ='$nisn',nama_wali = '$nama_wali',no_ortu = '$no_ortu',pekerjaan_ortu = '$pekerjaan_ortu',alamat = '$alamat' where ID = $id";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
            ?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan!");
                window.location = '../../../pages-pendaftaran.php';
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