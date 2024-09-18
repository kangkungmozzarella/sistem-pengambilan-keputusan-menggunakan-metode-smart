<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-calculator"></i>
        </span> Menghitung Nilai Utility
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nilai Utility Alternatif</h4>

                <!-- Dropdown untuk memilih jurusan -->
                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan:</label>
                    <select id="jurusan" class="form-control" onchange="location = this.value;">
                        <option value="utilitas.php?jurusan=Informatika" <?= (isset($_GET['jurusan']) && $_GET['jurusan'] == 'Informatika') ? 'selected' : '' ?>>Informatika</option>
                        <option value="utilitas.php?jurusan=Manajemen" <?= (isset($_GET['jurusan']) && $_GET['jurusan'] == 'Manajemen') ? 'selected' : '' ?>>Manajemen</option>
                    </select>
                </div>

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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../../config/koneksi.php';

                            $no = 1;
                            $jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : 'Informatika'; // Default ke Informatika jika tidak ada jurusan yang dipilih

                            // Mengambil data alternatif berdasarkan jurusan
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE jurusan='$jurusan'");
                            $alternatifData = mysqli_fetch_all($sql, MYSQLI_ASSOC);

                            // Mengambil nilai min dan max
                            $minMaxQuery = mysqli_query($koneksi, "SELECT MIN(C1) as min_C1, MAX(C1) as max_C1, MIN(C2) as min_C2, MAX(C2) as max_C2, MIN(C3) as min_C3, MAX(C3) as max_C3, MIN(C4) as min_C4, MAX(C4) as max_C4, MIN(C5) as min_C5, MAX(C5) as max_C5, MIN(C6) as min_C6, MAX(C6) as max_C6, MIN(C7) as min_C7, MAX(C7) as max_C7 FROM tbl_alternatif WHERE jurusan='$jurusan'");
                            $minMax = mysqli_fetch_assoc($minMaxQuery);

                            // Fungsi untuk menghitung nilai utility
                            function hitung_utility($value, $min, $max, $isBenefit)
                            {
                                if ($isBenefit) {
                                    return ($value - $min) / ($max - $min);
                                } else {
                                    return ($max - $value) / ($max - $min);
                                }
                            }

                            // Loop melalui setiap data alternatif dan hitung utility
                            foreach ($alternatifData as $row) {
                                $utility_C1 = hitung_utility($row['C1'], $minMax['min_C1'], $minMax['max_C1'], false); // Harga sebagai cost
                                $utility_C2 = hitung_utility($row['C2'], $minMax['min_C2'], $minMax['max_C2'], true);  // Prosesor sebagai benefit
                                $utility_C3 = hitung_utility($row['C3'], $minMax['min_C3'], $minMax['max_C3'], true);  // Layar sebagai benefit
                                $utility_C4 = hitung_utility($row['C4'], $minMax['min_C4'], $minMax['max_C4'], false); // OS sebagai cost
                                $utility_C5 = hitung_utility($row['C5'], $minMax['min_C5'], $minMax['max_C5'], true);  // RAM sebagai benefit
                                $utility_C6 = hitung_utility($row['C6'], $minMax['min_C6'], $minMax['max_C6'], true);  // VGA sebagai benefit
                                $utility_C7 = hitung_utility($row['C7'], $minMax['min_C7'], $minMax['max_C7'], true);  // Penyimpanan sebagai benefit
                            ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['alternatif'] ?></td>
                                    <td><?= round($utility_C1, 4) ?></td>
                                    <td><?= round($utility_C2, 4) ?></td>
                                    <td><?= round($utility_C3, 4) ?></td>
                                    <td><?= round($utility_C4, 4) ?></td>
                                    <td><?= round($utility_C5, 4) ?></td>
                                    <td><?= round($utility_C6, 4) ?></td>
                                    <td><?= round($utility_C7, 4) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>