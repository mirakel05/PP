<?php 
session_start();
include "../koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users where email='$email' AND password='$password'";
$login = mysqli_query($conn, $query);

$cek = mysqli_num_rows($login);
if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location: index.php");
} else {
    header("location: login.php?pesan=gagal");
}
