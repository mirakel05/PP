<?php 
include '../../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET ['id'];

    $sql = "SELECT * FROM guru where id = $id";
    $conn -> query ($sql);
    $data = $conn -> query ($sql);
    $row = $data -> fetch_assoc();
    $path = './file/';

    var_dump ($row);    

    if (file_exists ($path.$row ['foto'])) {
        unlink ($path.$row ['foto']);
    }
    
    $hapus = "DELETE FROM guru where id = $id";
    if ($conn -> query($hapus) === true) {
    header ('location:../../../pages-guru.php');
    }
}
?>