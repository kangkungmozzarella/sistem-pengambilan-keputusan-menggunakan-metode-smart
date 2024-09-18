<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Kriteria / Edit Kriteria
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data</h4>
                <p class="card-description">Silahkan Edit Data</p>
                <form class="forms-sample" action="edit_act.php" method="POST">
                    <?php
                    include '../../config/koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria WHERE id = '$id'");
                    $data = mysqli_fetch_array($sql);
                    ?>
                    <div class="form-group">
                        <label for="namaKriteria">Nama Kriteria</label>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input type="text" name="kriteria" value="<?= $data['kriteria'] ?>" class="form-control" id="namaKriteria" placeholder="Nama Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot (%)</label>
                        <input type="number" step="1" name="bobot" value="<?= $data['bobot'] ?>" class="form-control" id="bobot" placeholder="Bobot" required>
                    </div>
                    <div class="form-group">
                        <label for="normalisasi">Normalisasi</label>
                        <input type="number" step="0.01" name="normalisasi" value="<?= $data['normalisasi'] ?>" class="form-control" id="normalisasi" placeholder="Normalisasi" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" class="form-control" id="jenis" required>
                            <option value="Benefit" <?= $data['jenis'] == 'Benefit' ? 'selected' : '' ?>>Benefit</option>
                            <option value="Cost" <?= $data['jenis'] == 'Cost' ? 'selected' : '' ?>>Cost</option>
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