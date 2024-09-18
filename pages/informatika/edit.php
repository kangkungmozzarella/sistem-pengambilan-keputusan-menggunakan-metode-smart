<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-laptop"></i>
        </span> Edit Data Laptop Informatika
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Laptop</h4>
                <p class="card-description">Silahkan Edit Data Laptop</p>
                <form class="forms-sample" action="edit_act.php" method="POST">
                    <?php
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_informatika WHERE id = '$id'");
                    $data = mysqli_fetch_array($sql);
                    ?>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input type="text" name="merek" value="<?= $data['merek'] ?>" class="form-control" id="merek" placeholder="Merek Laptop">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?= $data['harga'] ?>" class="form-control" id="harga" placeholder="Harga Laptop">
                    </div>
                    <div class="form-group">
                        <label for="processor">Processor</label>
                        <input type="text" name="processor" value="<?= $data['processor'] ?>" class="form-control" id="processor" placeholder="Tipe Processor">
                    </div>
                    <div class="form-group">
                        <label for="ukuran_layar">Ukuran Layar</label>
                        <input type="text" name="ukuran_layar" value="<?= $data['ukuran_layar'] ?>" class="form-control" id="ukuran_layar" placeholder="Ukuran Layar">
                    </div>
                    <div class="form-group">
                        <label for="sistem_operasi">Sistem Operasi</label>
                        <input type="text" name="sistem_operasi" value="<?= $data['sistem_operasi'] ?>" class="form-control" id="sistem_operasi" placeholder="Sistem Operasi">
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_ram">Kapasitas RAM</label>
                        <input type="text" name="kapasitas_ram" value="<?= $data['kapasitas_ram'] ?>" class="form-control" id="kapasitas_ram" placeholder="Kapasitas RAM">
                    </div>
                    <div class="form-group">
                        <label for="tipe_vga">Tipe VGA</label>
                        <input type="text" name="tipe_vga" value="<?= $data['tipe_vga'] ?>" class="form-control" id="tipe_vga" placeholder="Tipe VGA">
                    </div>
                    <div class="form-group">
                        <label for="penyimpanan">Penyimpanan</label>
                        <input type="text" name="penyimpanan" value="<?= $data['penyimpanan'] ?>" class="form-control" id="penyimpanan" placeholder="Kapasitas Penyimpanan">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="index.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>