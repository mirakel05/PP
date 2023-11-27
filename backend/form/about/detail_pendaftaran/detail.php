<?php
include '../../../../koneksi.php';
if ($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM pendaftaran where id = $id";
}
?>