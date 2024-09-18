<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Dashboard
    </h3>
</div>

<div class="row">
    <!-- Jumlah Kriteria -->
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="../../assets/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Jumlah Kriteria <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
                <?php
                $sql = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tbl_kriteria");
                $data = mysqli_fetch_assoc($sql);
                $jumlah_kriteria = $data['total'];
                ?>
                <h2 class="mb-5"><?= $jumlah_kriteria ?></h2>
            </div>
        </div>
    </div>

    <!-- Jumlah Data Sub Kriteria -->
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="../../assets/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Jumlah Sub Kriteria <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
                <?php
                $sql = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tbl_sub_kriteria");
                $data = mysqli_fetch_assoc($sql);
                $jumlah_sub_kriteria = $data['total'];
                ?>
                <h2 class="mb-5"><?= $jumlah_sub_kriteria ?></h2>
            </div>
        </div>
    </div>

    <!-- Jumlah Laptop Informatika -->
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="../../assets/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Jumlah Laptop Informatika <i class="mdi mdi-laptop mdi-24px float-right"></i></h4>
                <?php
                $sql = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tbl_informatika");
                $data = mysqli_fetch_assoc($sql);
                $jumlah_informatika = $data['total'];
                ?>
                <h2 class="mb-5"><?= $jumlah_informatika ?></h2>
            </div>
        </div>
    </div>

    <!-- Jumlah Laptop Manajemen -->
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="../../assets/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Jumlah Laptop Manajemen <i class="mdi mdi-laptop mdi-24px float-right"></i></h4>
                <?php
                $sql = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tbl_manajemen");
                $data = mysqli_fetch_assoc($sql);
                $jumlah_manajemen = $data['total'];
                ?>
                <h2 class="mb-5"><?= $jumlah_manajemen ?></h2>
            </div>
        </div>
    </div>

    <!-- Jumlah Data Alternatif -->
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-warning card-img-holder text-white">
            <div class="card-body">
                <img src="../../assets/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Jumlah Data Alternatif <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
                <?php
                $sql = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tbl_alternatif");
                $data = mysqli_fetch_assoc($sql);
                $jumlah_data_alternatif = $data['total'];
                ?>
                <h2 class="mb-5"><?= $jumlah_data_alternatif ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Peringkat Laptop Berdasarkan Nilai Akhir</h4>
                <canvas id="rankingChart" width="400" height="200"></canvas>
                <?php
                // Fungsi untuk menghitung nilai utility
                function hitung_utility($value, $min, $max, $isBenefit)
                {
                    if ($isBenefit) {
                        return ($value - $min) / ($max - $min);
                    } else {
                        return ($max - $value) / ($max - $min);
                    }
                }

                // Mengambil data dan peringkat untuk jurusan Informatika
                $jurusanInformatika = 'Informatika';
                $sqlInformatika = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE jurusan='$jurusanInformatika'");
                $alternatifDataInformatika = mysqli_fetch_all($sqlInformatika, MYSQLI_ASSOC);

                $minMaxQueryInformatika = mysqli_query($koneksi, "SELECT MIN(C1) as min_C1, MAX(C1) as max_C1, MIN(C2) as min_C2, MAX(C2) as max_C2, MIN(C3) as min_C3, MAX(C3) as max_C3, MIN(C4) as min_C4, MAX(C4) as max_C4, MIN(C5) as min_C5, MAX(C5) as max_C5, MIN(C6) as min_C6, MAX(C6) as max_C6, MIN(C7) as min_C7, MAX(C7) as max_C7 FROM tbl_alternatif WHERE jurusan='$jurusanInformatika'");
                $minMaxInformatika = mysqli_fetch_assoc($minMaxQueryInformatika);

                $bobotQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria");
                $bobotData = mysqli_fetch_all($bobotQuery, MYSQLI_ASSOC);

                $bobot = [];
                foreach ($bobotData as $row) {
                    $bobot[$row['kriteria']] = $row['normalisasi'];
                }

                $hasilAkhirInformatika = [];
                foreach ($alternatifDataInformatika as $row) {
                    $utility_C1 = hitung_utility($row['C1'], $minMaxInformatika['min_C1'], $minMaxInformatika['max_C1'], false);
                    $utility_C2 = hitung_utility($row['C2'], $minMaxInformatika['min_C2'], $minMaxInformatika['max_C2'], true);
                    $utility_C3 = hitung_utility($row['C3'], $minMaxInformatika['min_C3'], $minMaxInformatika['max_C3'], true);
                    $utility_C4 = hitung_utility($row['C4'], $minMaxInformatika['min_C4'], $minMaxInformatika['max_C4'], true);
                    $utility_C5 = hitung_utility($row['C5'], $minMaxInformatika['min_C5'], $minMaxInformatika['max_C5'], true);
                    $utility_C6 = hitung_utility($row['C6'], $minMaxInformatika['min_C6'], $minMaxInformatika['max_C6'], true);
                    $utility_C7 = hitung_utility($row['C7'], $minMaxInformatika['min_C7'], $minMaxInformatika['max_C7'], true);

                    $nilai_akhir = ($utility_C1 * $bobot['Harga']) +
                        ($utility_C2 * $bobot['Tipe Prosesor']) +
                        ($utility_C3 * $bobot['Ukuran Layar']) +
                        ($utility_C4 * $bobot['Sistem Operasi']) +
                        ($utility_C5 * $bobot['Kapasitas RAM']) +
                        ($utility_C6 * $bobot['Tipe VGA']) +
                        ($utility_C7 * $bobot['Kapasitas Penyimpanan']);

                    $hasilAkhirInformatika[] = [
                        'alternatif' => $row['alternatif'],
                        'nilai_akhir' => $nilai_akhir
                    ];
                }

                usort($hasilAkhirInformatika, function ($a, $b) {
                    return $b['nilai_akhir'] <=> $a['nilai_akhir'];
                });

                // Mengambil data dan peringkat untuk jurusan Manajemen
                $jurusanManajemen = 'Manajemen';
                $sqlManajemen = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE jurusan='$jurusanManajemen'");
                $alternatifDataManajemen = mysqli_fetch_all($sqlManajemen, MYSQLI_ASSOC);

                $minMaxQueryManajemen = mysqli_query($koneksi, "SELECT MIN(C1) as min_C1, MAX(C1) as max_C1, MIN(C2) as min_C2, MAX(C2) as max_C2, MIN(C3) as min_C3, MAX(C3) as max_C3, MIN(C4) as min_C4, MAX(C4) as max_C4, MIN(C5) as min_C5, MAX(C5) as max_C5, MIN(C6) as min_C6, MAX(C6) as max_C6, MIN(C7) as min_C7, MAX(C7) as max_C7 FROM tbl_alternatif WHERE jurusan='$jurusanManajemen'");
                $minMaxManajemen = mysqli_fetch_assoc($minMaxQueryManajemen);

                $hasilAkhirManajemen = [];
                foreach ($alternatifDataManajemen as $row) {
                    $utility_C1 = hitung_utility($row['C1'], $minMaxManajemen['min_C1'], $minMaxManajemen['max_C1'], false);
                    $utility_C2 = hitung_utility($row['C2'], $minMaxManajemen['min_C2'], $minMaxManajemen['max_C2'], true);
                    $utility_C3 = hitung_utility($row['C3'], $minMaxManajemen['min_C3'], $minMaxManajemen['max_C3'], true);
                    $utility_C4 = hitung_utility($row['C4'], $minMaxManajemen['min_C4'], $minMaxManajemen['max_C4'], true);
                    $utility_C5 = hitung_utility($row['C5'], $minMaxManajemen['min_C5'], $minMaxManajemen['max_C5'], true);
                    $utility_C6 = hitung_utility($row['C6'], $minMaxManajemen['min_C6'], $minMaxManajemen['max_C6'], true);
                    $utility_C7 = hitung_utility($row['C7'], $minMaxManajemen['min_C7'], $minMaxManajemen['max_C7'], true);

                    $nilai_akhir = ($utility_C1 * $bobot['Harga']) +
                        ($utility_C2 * $bobot['Tipe Prosesor']) +
                        ($utility_C3 * $bobot['Ukuran Layar']) +
                        ($utility_C4 * $bobot['Sistem Operasi']) +
                        ($utility_C5 * $bobot['Kapasitas RAM']) +
                        ($utility_C6 * $bobot['Tipe VGA']) +
                        ($utility_C7 * $bobot['Kapasitas Penyimpanan']);

                    $hasilAkhirManajemen[] = [
                        'alternatif' => $row['alternatif'],
                        'nilai_akhir' => $nilai_akhir
                    ];
                }

                usort($hasilAkhirManajemen, function ($a, $b) {
                    return $b['nilai_akhir'] <=> $a['nilai_akhir'];
                });

                $chartLabels = array_merge(array_column($hasilAkhirInformatika, 'alternatif'), array_column($hasilAkhirManajemen, 'alternatif'));
                $chartScores = array_merge(array_column($hasilAkhirInformatika, 'nilai_akhir'), array_column($hasilAkhirManajemen, 'nilai_akhir'));
                $chartColors = array_merge(
                    array_fill(0, count($hasilAkhirInformatika), 'rgba(54, 162, 235, 0.5)'), // Warna untuk Informatika
                    array_fill(0, count($hasilAkhirManajemen), 'rgba(255, 99, 132, 0.5)')  // Warna untuk Manajemen
                );
                ?>

                <script>
                    var ctx = document.getElementById('rankingChart').getContext('2d');
                    var rankingChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($chartLabels); ?>,
                            datasets: [{
                                data: <?php echo json_encode($chartScores); ?>,
                                backgroundColor: <?php echo json_encode($chartColors); ?>,
                                borderColor: <?php echo json_encode($chartColors); ?>,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                },
                                x: {
                                    display: false // Menghapus label pada sumbu x
                                }
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    labels: {
                                        generateLabels: function(chart) {
                                            return [{
                                                text: 'Informatika',
                                                fillStyle: 'rgba(54, 162, 235, 0.5)'
                                            }, {
                                                text: 'Manajemen',
                                                fillStyle: 'rgba(255, 99, 132, 0.5)'
                                            }];
                                        }
                                    }
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            var label = 'Nilai Akhir: ';
                                            label += context.parsed.y.toFixed(2); // Membatasi angka desimal menjadi 2
                                            return label;
                                        }
                                    }
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footers.php'; ?>