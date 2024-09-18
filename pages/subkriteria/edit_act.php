<?php
include '../../config/koneksi.php';

// Mengambil data dari form edit
$id = $_POST['id'];
$sub_kriteria = $_POST['sub_kriteria'];
$nilai = $_POST['nilai'];
$bobot = $_POST['bobot'];
$jurusan = $_POST['jurusan'];

// Melakukan update data di tabel tbl_sub_kriteria
$query = "UPDATE tbl_sub_kriteria SET sub_kriteria='$sub_kriteria', nilai='$nilai', bobot='$bobot', jurusan='$jurusan' WHERE id='$id'";

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
