<?php 
include '../../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM pendaftaran where id = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
    $path = './file/'; 

    if (file_exists ($path.$row ['files'])) {
        unlink ($path.$row ['files']);
    }
    
    $hapus = "DELETE FROM pendaftaran where id = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../../pages-pendaftaran.php');
    }
}
?>