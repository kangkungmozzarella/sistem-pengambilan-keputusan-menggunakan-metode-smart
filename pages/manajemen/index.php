<?php include '../layout/headers.php'; ?>
<?php include '../layout/sidebars.php'; ?>
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-laptop"></i>
        </span> Data Laptop Manajemen
    </h3>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <a href="add.php" class="btn btn-primary" style="margin-bottom: 20px;">Add Laptop</a>
            <table class="table table-bordered table-responsive" id="laptop-table">
                <thead>
                    <tr class="text-center">
                        <th> No </th>
                        <th> Merek </th>
                        <th> Harga </th>
                        <th> Processor </th>
                        <th> Ukuran Layar </th>
                        <th> Sistem Operasi </th>
                        <th> Kapasitas RAM </th>
                        <th> Tipe VGA </th>
                        <th> Penyimpanan </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_manajemen");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td class="wrap-text"><?= $row['merek'] ?></td>
                            <td><?= $row['harga'] ?></td>
                            <td class="wrap-text"><?= $row['processor'] ?></td>
                            <td class="wrap-text"><?= $row['ukuran_layar'] ?></td>
                            <td class="wrap-text"><?= $row['sistem_operasi'] ?></td>
                            <td class="wrap-text"><?= $row['kapasitas_ram'] ?></td>
                            <td class="wrap-text"><?= $row['tipe_vga'] ?></td>
                            <td class="wrap-text"><?= $row['penyimpanan'] ?></td>
                            <td>
                                <div class="btn-container">
                                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-action">Edit</a>
                                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-action" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include '../layout/footers.php'; ?>

<style>
    #laptop-table {
        width: 100%;
        table-layout: fixed;
    }

    #laptop-table th,
    #laptop-table td {
        white-space: normal;
        word-wrap: break-word;
    }

    .wrap-text {
        max-width: 150px;
    }

    .btn-action {
        margin: 5px 0;
        width: 80px;
        /* Mengatur lebar tombol agar sesuai dengan lebar kolom */
        text-align: center;
        white-space: nowrap;
        overflow: visible;
        /* Memastikan teks tidak terpotong */
        text-overflow: ellipsis;
        padding: 5px;
    }

    .btn-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>