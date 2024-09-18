<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Data Alternatif / Edit Alternatif
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Alternatif</h4>
                <p class="card-description">Silahkan Edit Data Alternatif</p>
                <form class="forms-sample" action="edit_act.php" method="POST">
                    <?php
                    $id = $_GET['id'];
                    include '../../config/koneksi.php';
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_alternatif WHERE id = '$id'");
                    $data = mysqli_fetch_array($sql);
                    ?>
                    <div class="form-group">
                        <label for="alternatif">Alternatif</label>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input type="text" name="alternatif" value="<?= $data['alternatif'] ?>" class="form-control" id="alternatif" placeholder="Nama Alternatif" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="Informatika" <?= $data['jurusan'] == 'Informatika' ? 'selected' : '' ?>>Informatika</option>
                            <option value="Manajemen" <?= $data['jurusan'] == 'Manajemen' ? 'selected' : '' ?>>Manajemen</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga (C1)</label>
                        <input type="number" step="0.01" name="harga" value="<?= $data['C1'] ?>" class="form-control" id="harga" placeholder="Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="prosesor">Prosesor (C2)</label>
                        <input type="number" step="0.01" name="prosesor" value="<?= $data['C2'] ?>" class="form-control" id="prosesor" placeholder="Prosesor" required>
                    </div>
                    <div class="form-group">
                        <label for="layar">Layar (C3)</label>
                        <input type="number" step="0.01" name="layar" value="<?= $data['C3'] ?>" class="form-control" id="layar" placeholder="Layar" required>
                    </div>
                    <div class="form-group">
                        <label for="os">OS (C4)</label>
                        <input type="number" step="0.01" name="os" value="<?= $data['C4'] ?>" class="form-control" id="os" placeholder="OS" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">RAM (C5)</label>
                        <input type="number" step="0.01" name="ram" value="<?= $data['C5'] ?>" class="form-control" id="ram" placeholder="RAM" required>
                    </div>
                    <div class="form-group">
                        <label for="vga">VGA (C6)</label>
                        <input type="number" step="0.01" name="vga" value="<?= $data['C6'] ?>" class="form-control" id="vga" placeholder="VGA" required>
                    </div>
                    <div class="form-group">
                        <label for="penyimpanan">Penyimpanan (C7)</label>
                        <input type="number" step="0.01" name="penyimpanan" value="<?= $data['C7'] ?>" class="form-control" id="penyimpanan" placeholder="Penyimpanan" required>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="index.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>