<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama customer</th>
                        <th>Jumlah barang</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php $i = 1; ?>
                <?php

                $pdo = Koneksi::connect();
                $transaksi = new transaksi($pdo);

                $orang = $transaksi->view();

                foreach ($orang as $row) :
                ?>
                    <tr>

                        <td><?= $i; ?></td>
                        <td><?= $row["tanggal_transaksi"] ?></td>
                        <td><?= $row["nama_customer"] ?></td>
                        <td><?= $row["jumlah_barang"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["status"] ?></td>
                        <td>
                            <a href="index.php?page=transaksi&act=update&id=<?= $row["id_transaksi"]; ?>">edit</a> |
                            <a href="index.php?page=transaksi&act=delete&id=<?= $row["id_transaksi"]; ?>" onclick="return confirm('yakin?');">hapus</a>
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