<?php
include '../../config/koneksi.php';

// Mengambil ID dari parameter URL
$id = $_GET['id'];

// Menghapus data dari tabel tbl_sub_kriteria berdasarkan ID
mysqli_query($koneksi, "DELETE FROM tbl_sub_kriteria WHERE id='$id'");

// Mengarahkan kembali ke halaman index dengan pesan alert hapus
header("location:index.php?alert=hapus");
