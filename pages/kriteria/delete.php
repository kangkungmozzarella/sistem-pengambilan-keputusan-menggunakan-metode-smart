<?php
include '../../config/koneksi.php';

// Mengambil ID dari parameter URL dan melakukan validasi
$id = intval($_GET['id']); // Mengonversi ID ke integer untuk mencegah SQL injection

// Membuat query untuk menghapus data dari tabel tbl_kriteria
$query = "DELETE FROM tbl_kriteria WHERE id='$id'";

// Menjalankan query
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if ($result) {
    // Mengarahkan kembali ke halaman index dengan alert hapus jika berhasil
    header("Location: index.php?alert=hapus");
} else {
    // Menampilkan pesan error jika terjadi kesalahan
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
