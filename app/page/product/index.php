<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Nama barang</th>
                        <th>Jumlah barang</th>
                        <th>Harga barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php $i = 1; ?>
                <?php

                $pdo = Koneksi::connect();
                $product = new product($pdo);

                $orang = $product->view();


                foreach ($orang as $row) :
                ?>
                    <tr>

                        <td><?= $i; ?></td>
                        <td><?= $row["nama_product"] ?></td>
                        <td><?= $row["jumlah_product"] ?></td>
                        <td>Rp. <?= number_format($row["harga_product"]) ?></td>
                        <td>
                            <a href="index.php?page=product&act=update&id=<?= $row["id_product"]; ?>">edit</a> |
                            <a href="index.php?page=product&act=delete&id=<?= $row["id_product"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach;

                $pdo = Koneksi::disconnect();
                ?>
            </table>
        </div>

    </div>

</div>
<!-- End of Main Content -->