<?php 
include '../../koneksi.php';
if (isset ($_POST ['submit'])) {
    $nama = $_POST ['nama'];
    $subjek = $_POST ['subjek'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $message = $_POST ['message'];

        $sql = "INSERT INTO kontak (nama,email,subjek,phone,message) values ('$nama','$email','$subjek','$phone','$message')";
        $berhasil = ($conn->query($sql) === true);

    if ($berhasil) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan!");
            window.location = '../contact.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Data Gagal Disimpan!");
            window.location = '../contact.php';
        </script>
<?php
    }
}
?>