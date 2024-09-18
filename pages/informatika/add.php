<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-laptop"></i>
        </span> Data Laptop / Tambah Laptop
    </h3>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Laptop</h4>
                <p class="card-description">Silahkan Masukkan Data Laptop</p>
                <form class="forms-sample" action="add_act.php" method="POST">
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text" name="merek" class="form-control" id="merek" placeholder="Masukkan Merek Laptop" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga Laptop" required>
                    </div>
                    <div class="form-group">
                        <label for="processor">Processor</label>
                        <input type="text" name="processor" class="form-control" id="processor" placeholder="Masukkan Tipe Processor" required>
                    </div>
                    <div class="form-group">
                        <label for="ukuran_layar">Ukuran Layar</label>
                        <input type="text" name="ukuran_layar" class="form-control" id="ukuran_layar" placeholder="Masukkan Ukuran Layar" required>
                    </div>
                    <div class="form-group">
                        <label for="sistem_operasi">Sistem Operasi</label>
                        <input type="text" name="sistem_operasi" class="form-control" id="sistem_operasi" placeholder="Masukkan Sistem Operasi" required>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_ram">Kapasitas RAM</label>
                        <input type="text" name="kapasitas_ram" class="form-control" id="kapasitas_ram" placeholder="Masukkan Kapasitas RAM" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_vga">Tipe VGA</label>
                        <input type="text" name="tipe_vga" class="form-control" id="tipe_vga" placeholder="Masukkan Tipe VGA" required>
                    </div>
                    <div class="form-group">
                        <label for="penyimpanan">Penyimpanan</label>
                        <input type="text" name="penyimpanan" class="form-control" id="penyimpanan" placeholder="Masukkan Kapasitas Penyimpanan" required>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <a href="index.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>