<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-file-tree menu-icon"></i>
        </span> Data Alternatif
    </h3>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <a href="add.php" class="btn btn-primary" style="margin-bottom: 20px;">Add Alternatif</a>

            <!-- Dropdown Menu untuk Memilih Jurusan -->
            <form method="GET" action="">
                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Informatika" <?= isset($_GET['jurusan']) && $_GET['jurusan'] == 'Informatika' ? 'selected' : '' ?>>Informatika</option>
                        <option value="Manajemen" <?= isset($_GET['jurusan']) && $_GET['jurusan'] == 'Manajemen' ? 'selected' : '' ?>>Manajemen</option>
                    </select>
                </div>
            </form>

            <!-- Tabel Alternatif -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Alternatif</th>
                            <th>Harga (C1)</th>
                            <th>Prosesor (C2)</th>
                            <th>Layar (C3)</th>
                            <th>OS (C4)</th>
                            <th>RAM (C5)</th>
                            <th>VGA (C6)</th>
                            <th>Penyimpanan (C7)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../config/koneksi.php';
                        $jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
                        if ($jurusan) {
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE jurusan = '$jurusan'");
                            while ($row = mysqli_fetch_array($sql)) {
                        ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['alternatif'] ?></td>
                                    <td><?= $row['C1'] ?></td>
                                    <td><?= $row['C2'] ?></td>
                                    <td><?= $row['C3'] ?></td>
                                    <td><?= $row['C4'] ?></td>
                                    <td><?= $row['C5'] ?></td>
                                    <td><?= $row['C6'] ?></td>
                                    <td><?= $row['C7'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                        <a onclick="return confirm('apakah anda ingin menghapus data ini')" class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="10" class="text-center">Pilih jurusan untuk melihat data alternatif</td></tr>';
                        }
                        ?>
                    </tbody>
                    <?php if ($jurusan): ?>
                        <tfoot>
                            <tr class="text-center">
                                <th colspan="2">MIN</th>
                                <?php
                                $minQuery = mysqli_query($koneksi, "SELECT MIN(C1) as min_C1, MIN(C2) as min_C2, MIN(C3) as min_C3, MIN(C4) as min_C4, MIN(C5) as min_C5, MIN(C6) as min_C6, MIN(C7) as min_C7 FROM tbl_alternatif WHERE jurusan = '$jurusan'");
                                $minRow = mysqli_fetch_array($minQuery);
                                ?>
                                <th><?= $minRow['min_C1'] ?></th>
                                <th><?= $minRow['min_C2'] ?></th>
                                <th><?= $minRow['min_C3'] ?></th>
                                <th><?= $minRow['min_C4'] ?></th>
                                <th><?= $minRow['min_C5'] ?></th>
                                <th><?= $minRow['min_C6'] ?></th>
                                <th><?= $minRow['min_C7'] ?></th>
                                <th></th>
                            </tr>
                            <tr class="text-center">
                                <th colspan="2">MAX</th>
                                <?php
                                $maxQuery = mysqli_query($koneksi, "SELECT MAX(C1) as max_C1, MAX(C2) as max_C2, MAX(C3) as max_C3, MAX(C4) as max_C4, MAX(C5) as max_C5, MAX(C6) as max_C6, MAX(C7) as max_C7 FROM tbl_alternatif WHERE jurusan = '$jurusan'");
                                $maxRow = mysqli_fetch_array($maxQuery);
                                ?>
                                <th><?= $maxRow['max_C1'] ?></th>
                                <th><?= $maxRow['max_C2'] ?></th>
                                <th><?= $maxRow['max_C3'] ?></th>
                                <th><?= $maxRow['max_C4'] ?></th>
                                <th><?= $maxRow['max_C5'] ?></th>
                                <th><?= $maxRow['max_C6'] ?></th>
                                <th><?= $maxRow['max_C7'] ?></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>