<?php
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    session_start();
    $data = mysqli_fetch_assoc($login);
    $_SESSION['id'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = "login";

    header("location:pages/dashboard/");
} else {
    header("location:index.php");
}
