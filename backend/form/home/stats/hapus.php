<?php 
include '../../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM stats where id = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
   
    $hapus = "DELETE FROM stats where id = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../../pages-stats.php');
    }
}
?>