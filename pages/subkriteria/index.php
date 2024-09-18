<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-source-fork menu-icon"></i>
        </span> Data Sub Kriteria
    </h3>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <a href="add.php" class="btn btn-primary" style="margin-bottom: 20px;">Add Sub Kriteria</a>
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

            <!-- Tabel Sub Kriteria -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Kriteria</th>
                            <th>Sub Kriteria</th>
                            <th>Nilai</th>
                            <th>Bobot (%)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../config/koneksi.php';
                        $jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : '';
                        if ($jurusan) {
                            $no = 1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_sub_kriteria WHERE jurusan = '$jurusan' ORDER BY kriteria ASC, nilai ASC");
                            while ($row = mysqli_fetch_array($sql)) {
                        ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['kriteria'] ?></td>
                                    <td><?= $row['sub_kriteria'] ?></td>
                                    <td><?= $row['nilai'] ?></td>
                                    <td><?= $row['bobot'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<tr><td colspan="6" class="text-center">Pilih jurusan untuk melihat data sub kriteria</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>