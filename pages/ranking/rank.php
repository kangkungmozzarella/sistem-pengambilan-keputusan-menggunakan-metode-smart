<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-trophy"></i>
        </span> Pemeringkatan Laptop
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Pemeringkatan</h4>

                <!-- Dropdown untuk memilih jurusan -->
                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan:</label>
                    <select id="jurusan" class="form-control" onchange="location = this.value;">
                        <option value="rank.php?jurusan=Informatika" <?= (isset($_GET['jurusan']) && $_GET['jurusan'] == 'Informatika') ? 'selected' : '' ?>>Informatika</option>
                        <option value="rank.php?jurusan=Manajemen" <?= (isset($_GET['jurusan']) && $_GET['jurusan'] == 'Manajemen') ? 'selected' : '' ?>>Manajemen</option>
                    </select>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Peringkat</th>
                                <th>Alternatif</th>
                                <th>Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../../config/koneksi.php';

                            $jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : 'Informatika'; // Default ke Informatika jika tidak ada jurusan yang dipilih

                            // Mengambil data alternatif dan nilai akhir berdasarkan jurusan
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE jurusan='$jurusan'");
                            $alternatifData = mysqli_fetch_all($sql, MYSQLI_ASSOC);

                            // Mengambil nilai min dan max
                            $minMaxQuery = mysqli_query($koneksi, "SELECT MIN(C1) as min_C1, MAX(C1) as max_C1, MIN(C2) as min_C2, MAX(C2) as max_C2, MIN(C3) as min_C3, MAX(C3) as max_C3, MIN(C4) as min_C4, MAX(C4) as max_C4, MIN(C5) as min_C5, MAX(C5) as max_C5, MIN(C6) as min_C6, MAX(C6) as max_C6, MIN(C7) as min_C7, MAX(C7) as max_C7 FROM tbl_alternatif WHERE jurusan='$jurusan'");
                            $minMax = mysqli_fetch_assoc($minMaxQuery);

                            // Mengambil bobot dari tabel kriteria
                            $bobotQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria");
                            $bobotData = mysqli_fetch_all($bobotQuery, MYSQLI_ASSOC);

                            $bobot = [];
                            foreach ($bobotData as $row) {
                                $bobot[$row['kriteria']] = $row['normalisasi'];
                            }

                            // Fungsi untuk menghitung nilai utility
                            function hitung_utility($value, $min, $max, $isBenefit)
                            {
                                if ($isBenefit) {
                                    return ($value - $min) / ($max - $min);
                                } else {
                                    return ($max - $value) / ($max - $min);
                                }
                            }

                            // Loop melalui setiap data alternatif dan hitung nilai akhir
                            $hasilAkhir = [];
                            foreach ($alternatifData as $row) {
                                $utility_C1 = hitung_utility($row['C1'], $minMax['min_C1'], $minMax['max_C1'], false); // Harga sebagai cost
                                $utility_C2 = hitung_utility($row['C2'], $minMax['min_C2'], $minMax['max_C2'], true);  // Prosesor sebagai benefit
                                $utility_C3 = hitung_utility($row['C3'], $minMax['min_C3'], $minMax['max_C3'], true);  // Ukuran Layar sebagai benefit
                                $utility_C4 = hitung_utility($row['C4'], $minMax['min_C4'], $minMax['max_C4'], true);  // Sistem Operasi sebagai benefit
                                $utility_C5 = hitung_utility($row['C5'], $minMax['min_C5'], $minMax['max_C5'], true);  // Kapasitas RAM sebagai benefit
                                $utility_C6 = hitung_utility($row['C6'], $minMax['min_C6'], $minMax['max_C6'], true);  // Tipe VGA sebagai benefit
                                $utility_C7 = hitung_utility($row['C7'], $minMax['min_C7'], $minMax['max_C7'], true);  // Penyimpanan sebagai benefit

                                // Hitung nilai akhir berdasarkan bobot
                                $nilai_akhir = ($utility_C1 * $bobot['Harga']) +
                                    ($utility_C2 * $bobot['Tipe Prosesor']) +
                                    ($utility_C3 * $bobot['Ukuran Layar']) +
                                    ($utility_C4 * $bobot['Sistem Operasi']) +
                                    ($utility_C5 * $bobot['Kapasitas RAM']) +
                                    ($utility_C6 * $bobot['Tipe VGA']) +
                                    ($utility_C7 * $bobot['Kapasitas Penyimpanan']);

                                // Masukkan hasil ke array untuk diurutkan
                                $hasilAkhir[] = [
                                    'alternatif' => $row['alternatif'],
                                    'nilai_akhir' => $nilai_akhir
                                ];
                            }

                            // Urutkan hasil berdasarkan nilai akhir tertinggi
                            usort($hasilAkhir, function ($a, $b) {
                                return $b['nilai_akhir'] <=> $a['nilai_akhir'];
                            });

                            // Tampilkan hasil pemeringkatan
                            $no = 1;
                            foreach ($hasilAkhir as $row) {
                            ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['alternatif'] ?></td>
                                    <td><?= round($row['nilai_akhir'], 4) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Card untuk menampilkan 2 laptop terbaik -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laptop Terbaik 1</h5>
                                <p class="card-text">
                                    <strong>Alternatif:</strong> <?= $hasilAkhir[0]['alternatif'] ?><br>
                                    <strong>Nilai Akhir:</strong> <?= round($hasilAkhir[0]['nilai_akhir'], 4) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laptop Terbaik 2</h5>
                                <p class="card-text">
                                    <strong>Alternatif:</strong> <?= $hasilAkhir[1]['alternatif'] ?><br>
                                    <strong>Nilai Akhir:</strong> <?= round($hasilAkhir[1]['nilai_akhir'], 4) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>