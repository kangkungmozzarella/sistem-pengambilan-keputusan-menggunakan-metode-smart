<?php
include '../../config/koneksi.php';

// Mengambil data dari form
$alternatif = $_POST['alternatif'];
$jurusan = $_POST['jurusan'];
$harga = $_POST['harga'];
$prosesor = $_POST['prosesor'];
$layar = $_POST['layar'];
$os = $_POST['os'];
$ram = $_POST['ram'];
$vga = $_POST['vga'];
$penyimpanan = $_POST['penyimpanan'];

// Menyimpan data ke tabel tbl_alternatif
$query = "INSERT INTO tbl_alternatif (alternatif, jurusan, C1, C2, C3, C4, C5, C6, C7) VALUES ('$alternatif', '$jurusan', '$harga', '$prosesor', '$layar', '$os', '$ram', '$vga', '$penyimpanan')";

$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    header("Location: index.php?alert=add");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
