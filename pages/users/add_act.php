<?php
include '../../config/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO tbl_user VALUES(null,'$nama','$username','$password')");

header("Location:index.php");
