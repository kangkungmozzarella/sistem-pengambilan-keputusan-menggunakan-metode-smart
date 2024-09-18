<?php
include '../../config/koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];

mysqli_query($koneksi, "update tbl_user set nama='$nama', username='$username', password='$pwd' where id='$id'");
header("location:index.php?alert=edit");
