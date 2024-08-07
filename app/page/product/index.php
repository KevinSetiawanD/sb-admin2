<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="m-0 font-weight-bold text-primary">Product</h4>
        <a href="index.php?page=product&act=create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Product</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Nama barang</th>
                        <th>Gambar</th>
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
                        <td>
                            <img src="page/product/img/<?= $row["gambar_product"] ?>" width="90px" alt="gambar">
                        </td>
                        <td><?= $row["jumlah_product"] ?></td>
                        <td>Rp. <?= number_format($row["harga_product"]) ?></td>
                        <td>
                            <a class="btn btn-warning btn-circle" href="index.php?page=product&act=update&id=<?= $row["id_product"]; ?>">
                                <i class="fa fa-pen"></i>
                            </a> |
                            <a class="btn btn-danger btn-circle" href="index.php?page=product&act=delete&id=<?= $row["id_product"]; ?>" onclick="return confirm('yakin?');">
                                <i class="fas fa-trash"></i>
                            </a>
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