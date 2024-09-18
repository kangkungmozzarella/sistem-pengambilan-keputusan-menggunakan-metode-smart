<?php
include '../../config/koneksi.php';

// Mengambil data dari form
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];

// Menghitung nilai normalisasi
$total_bobot = 100; // Asumsi total bobot dalam persen adalah 100
$normalisasi = $bobot / $total_bobot; // Menghitung normalisasi berdasarkan bobot yang diinputkan

// Query untuk menambahkan data ke tabel tbl_kriteria
$query = "INSERT INTO tbl_kriteria (kriteria, bobot, normalisasi, jenis) VALUES ('$kriteria', '$bobot', '$normalisasi', '$jenis')";

// Menjalankan query
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    // Mengarahkan kembali ke halaman index dengan alert add jika berhasil
    header("Location: index.php?alert=add");
} else {
    // Menampilkan pesan error jika terjadi kesalahan
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
