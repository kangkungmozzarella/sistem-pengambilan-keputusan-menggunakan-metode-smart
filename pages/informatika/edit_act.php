<?php
include '../../config/koneksi.php';

$id = $_POST['id'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$processor = $_POST['processor'];
$ukuran_layar = $_POST['ukuran_layar'];
$sistem_operasi = $_POST['sistem_operasi'];
$kapasitas_ram = $_POST['kapasitas_ram'];
$tipe_vga = $_POST['tipe_vga'];
$penyimpanan = $_POST['penyimpanan'];

mysqli_query($koneksi, "UPDATE tbl_informatika SET merek='$merek', harga='$harga', processor='$processor', ukuran_layar='$ukuran_layar', sistem_operasi='$sistem_operasi', kapasitas_ram='$kapasitas_ram', tipe_vga='$tipe_vga', penyimpanan='$penyimpanan' WHERE id='$id'");

header("location:index.php?alert=edit");
