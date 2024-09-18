<?php
include '../../config/koneksi.php';

// Mengambil data dari form
$kriteria = $_POST['kriteria'];
$sub_kriteria = $_POST['sub_kriteria'];
$nilai = $_POST['nilai'];
$bobot = $_POST['bobot'];
$jurusan = $_POST['jurusan'];

// Menyimpan data ke tabel tbl_sub_kriteria
$query = "INSERT INTO tbl_sub_kriteria (kriteria, sub_kriteria, nilai, bobot, jurusan) VALUES ('$kriteria', '$sub_kriteria', '$nilai', '$bobot', '$jurusan')";

$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    header("Location: index.php?alert=add");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
