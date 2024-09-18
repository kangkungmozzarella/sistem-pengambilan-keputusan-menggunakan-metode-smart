<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Alternatif / Tambah Alternatif
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Alternatif</h4>
                <p class="card-description">Silahkan Masukkan Data Alternatif</p>
                <form class="forms-sample" action="add_act.php" method="POST">
                    <div class="form-group">
                        <label for="alternatif">Alternatif</label>
                        <input type="text" name="alternatif" class="form-control" id="alternatif" placeholder="Masukkan Nama Alternatif" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="Informatika">Informatika</option>
                            <option value="Manajemen">Manajemen</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga (C1)</label>
                        <input type="number" step="0.01" name="harga" class="form-control" id="harga" placeholder="Masukkan Nilai Alternatif Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="prosesor">Prosesor (C2)</label>
                        <input type="number" step="0.01" name="prosesor" class="form-control" id="prosesor" placeholder="Masukkan Nilai Alternatif Prosesor" required>
                    </div>
                    <div class="form-group">
                        <label for="layar">Layar (C3)</label>
                        <input type="number" step="0.01" name="layar" class="form-control" id="layar" placeholder="Masukkan Nilai Alternatif Layar" required>
                    </div>
                    <div class="form-group">
                        <label for="os">OS (C4)</label>
                        <input type="number" step="0.01" name="os" class="form-control" id="os" placeholder="Masukkan Nilai Alternatif OS" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM (C5)</label>
                        <input type="number" step="0.01" name="ram" class="form-control" id="ram" placeholder="Masukkan Nilai Alternatif RAM" required>
                    </div>
                    <div class="form-group">
                        <label for="vga">VGA (C6)</label>
                        <input type="number" step="0.01" name="vga" class="form-control" id="vga" placeholder="Masukkan Nilai Alternatif VGA" required>
                    </div>
                    <div class="form-group">
                        <label for="penyimpanan">Penyimpanan (C7)</label>
                        <input type="number" step="0.01" name="penyimpanan" class="form-control" id="penyimpanan" placeholder="Masukkan Nilai Alternatif Penyimpanan" required>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="index.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>