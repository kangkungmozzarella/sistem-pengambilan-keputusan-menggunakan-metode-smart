<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID yang diberikan
mysqli_query($koneksi, "DELETE FROM tbl_informatika WHERE id='$id'");

// Redirect kembali ke halaman index dengan parameter alert "hapus"
header("location:index.php?alert=hapus");
