<?php 
include '../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM kontak where ID = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
    
    $hapus = "DELETE FROM kontak where ID = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../backend/pages-kontak.php');
    }
}
?>