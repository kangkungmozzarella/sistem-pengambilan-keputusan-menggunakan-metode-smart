<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Sub Kriteria / Tambah Sub Kriteria
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Sub Kriteria</h4>
                <p class="card-description">Silahkan Masukkan Data Sub Kriteria</p>
                <form class="forms-sample" action="add_act.php" method="POST">
                    <div class="form-group">
                        <label for="kriteria">Kriteria</label>
                        <input type="text" name="kriteria" class="form-control" id="kriteria" placeholder="Masukkan Nama Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="sub_kriteria">Sub Kriteria</label>
                        <input type="text" name="sub_kriteria" class="form-control" id="sub_kriteria" placeholder="Masukkan Nama Sub Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" step="0.01" name="nilai" class="form-control" id="nilai" placeholder="Masukkan Nilai" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot (%)</label>
                        <input type="number" step="0.01" name="bobot" class="form-control" id="bobot" placeholder="Masukkan Bobot" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="Informatika">Informatika</option>
                            <option value="Manajemen">Manajemen</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="index.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>