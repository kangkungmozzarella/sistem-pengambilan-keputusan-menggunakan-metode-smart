<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-account-multiple"></i>
        </span> Data Kriteria
    </h3>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <a href="add.php" class="btn btn-primary" style="margin-bottom: 20px;">Add Kriteria</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th> No </th>
                        <th> Nama Kriteria </th>
                        <th> Bobot (%) </th>
                        <th> Normalisasi </th>
                        <th> Jenis </th> <!-- Kolom untuk jenis -->
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../config/koneksi.php';
                    $no = 1;
                    $total_normalisasi = 0;
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria");
                    while ($row = mysqli_fetch_array($sql)) {
                        $total_normalisasi += $row['normalisasi']; // Menjumlahkan total bobot normalisasi
                    ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $row['kriteria'] ?></td>
                            <td><?= $row['bobot'] ?>%</td> <!-- Menampilkan bobot dalam persen -->
                            <td><?= $row['normalisasi'] ?></td>
                            <td><?= $row['jenis'] ?></td> <!-- Menampilkan jenis -->
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <th colspan="2">Total Normalisasi</th>
                        <th colspan="3"><?= $total_normalisasi ?></th> <!-- Menampilkan total normalisasi -->
                        <th></th>
                    </tr>
                </tfoot>
            </table>
            <?php if ($total_normalisasi > 1): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Total normalisasi melebihi 1! Harap periksa kembali nilai bobot kriteria.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>