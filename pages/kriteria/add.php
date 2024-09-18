<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Kriteria / Tambah Kriteria
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Kriteria</h4>
                <p class="card-description">Silahkan Masukkan Data Kriteria</p>
                <form class="forms-sample" action="add_act.php" method="POST">
                    <div class="form-group">
                        <label for="kriteria">Nama Kriteria</label>
                        <input type="text" name="kriteria" class="form-control" id="kriteria" placeholder="Masukkan Nama Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot (%)</label>
                        <input type="number" step="1" name="bobot" class="form-control" id="bobot" placeholder="Masukkan Bobot (dalam persen)" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" class="form-control" id="jenis" required>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
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