<?php
include '../../config/koneksi.php';

// Mengambil data dari form edit
$id = $_POST['id'];
$alternatif = $_POST['alternatif'];
$jurusan = $_POST['jurusan'];
$harga = $_POST['harga'];
$prosesor = $_POST['prosesor'];
$layar = $_POST['layar'];
$os = $_POST['os'];
$ram = $_POST['ram'];
$vga = $_POST['vga'];
$penyimpanan = $_POST['penyimpanan'];

// Melakukan update data di tabel tbl_alternatif
$query = "UPDATE tbl_alternatif SET alternatif='$alternatif', jurusan='$jurusan', C1='$harga', C2='$prosesor', C3='$layar', C4='$os', C5='$ram', C6='$vga', C7='$penyimpanan' WHERE id='$id'";

// Menjalankan query
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    header("location:index.php?alert=edit");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
