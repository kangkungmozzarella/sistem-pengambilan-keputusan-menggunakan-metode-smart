<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Sub Kriteria / Edit Sub Kriteria
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Sub Kriteria</h4>
                <p class="card-description">Silahkan Edit Data Sub Kriteria</p>
                <form class="forms-sample" action="edit_act.php" method="POST">
                    <?php
                    $id = $_GET['id'];
                    include '../../config/koneksi.php';

                    // Mengambil data sub kriteria berdasarkan ID
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_sub_kriteria WHERE id = '$id'");
                    $data = mysqli_fetch_array($sql);
                    ?>
                    <div class="form-group">
                        <label for="kriteria">Kriteria</label>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input type="text" name="kriteria" value="<?= $data['kriteria'] ?>" class="form-control" id="kriteria" placeholder="Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="sub_kriteria">Sub Kriteria</label>
                        <input type="text" name="sub_kriteria" value="<?= $data['sub_kriteria'] ?>" class="form-control" id="sub_kriteria" placeholder="Sub Kriteria" required>
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" name="nilai" value="<?= $data['nilai'] ?>" class="form-control" id="nilai" placeholder="Nilai" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot (%)</label>
                        <input type="number" step="0.01" name="bobot" value="<?= $data['bobot'] ?>" class="form-control" id="bobot" placeholder="Bobot" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="Informatika" <?= $data['jurusan'] == 'Informatika' ? 'selected' : '' ?>>Informatika</option>
                            <option value="Manajemen" <?= $data['jurusan'] == 'Manajemen' ? 'selected' : '' ?>>Manajemen</option>
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