<?php
include '../../config/koneksi.php';

// Mengambil data dari form edit
$id = $_POST['id'];
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];

// Menghitung nilai normalisasi
$total_bobot = 100; // Total bobot yang diharapkan adalah 100%
$normalisasi = $bobot / $total_bobot;

// Memperbarui data di tabel tbl_kriteria berdasarkan id
$query = "UPDATE tbl_kriteria SET kriteria='$kriteria', bobot='$bobot', normalisasi='$normalisasi', jenis='$jenis' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    header("Location: index.php?alert=edit");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
