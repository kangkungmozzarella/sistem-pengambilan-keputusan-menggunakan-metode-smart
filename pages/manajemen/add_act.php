<?php
include '../../config/koneksi.php';

$merek = $_POST['merek'];
$harga = $_POST['harga'];
$processor = $_POST['processor'];
$ukuran_layar = $_POST['ukuran_layar'];
$sistem_operasi = $_POST['sistem_operasi'];
$kapasitas_ram = $_POST['kapasitas_ram'];
$tipe_vga = $_POST['tipe_vga'];
$penyimpanan = $_POST['penyimpanan'];

mysqli_query($koneksi, "INSERT INTO tbl_manajemen (merek, harga, processor, ukuran_layar, sistem_operasi, kapasitas_ram, tipe_vga, penyimpanan) VALUES ('$merek', '$harga', '$processor', '$ukuran_layar', '$sistem_operasi', '$kapasitas_ram', '$tipe_vga', '$penyimpanan')");
header("location:index.php?alert=add");
