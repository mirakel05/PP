<?php 
include '../../../../koneksi.php';
if (isset ($_POST ['submit'])) {
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
    $path = './file/';

    //untuk file
    $file = $_FILES['files'];
    $zip = time() . $_FILES['files']['name'];
    $file_tmp = $_FILES['files']['tmp_name'];
    if (move_uploaded_file($file_tmp, $path . $zip)) {
        $sql = "INSERT INTO pendaftaran (nama,tanggal_lahir,jenis_kelamin,gol,tb,bb,asal,email,phone,nisn,nama_wali,no_ortu,pekerjaan_ortu,alamat,files) values ('$nama','$tanggal_lahir','$jenis_kelamin','$gol','$tb','$bb','$asal','$email','$phone','$nisn','$nama_wali','$no_ortu','$pekerjaan_ortu','$alamat','$zip')";
        $berhasil = ($conn->query($sql) === true);

        if ($berhasil) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Ditambah!");
                window.location = '../../../../frontend/about.php';
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Ditambah!");
                window.location = '../about.php';
            </script>
        <?php
        }
    }
} else {
    $sql = "INSERT INTO pendaftaran (nama,tanggal_lahir,jenis_kelamin,gol,tb,bb,asal,email,phone,nisn,nama_wali,no_ortu,pekerjaan_ortu,alamat) values ('$nama','$tanggal_lahir','$jenis_kelamin','$gol','$tb','$bb','$asal','$email','$phone','$nisn','$nama_wali','$no_ortu','$pekerjaan_ortu','$alamat')";
    $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../../../../frontend/about.php.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan!");
            window.location = '../about.php';
        </script>
<?php
    }
}
?>

