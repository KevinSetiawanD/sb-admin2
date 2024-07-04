<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Customer</h1>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="m-0 font-weight-bold text-primary">User</h4>
        <a href="index.php?page=customer&act=create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Customer</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php $i = 1; ?>
                <?php

                $pdo = Koneksi::connect();
                $customer = new customer($pdo);

                $orang = $customer->view();


                foreach ($orang as $row) :
                ?>
                    <tr>

                        <td><?= $i; ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["no_telp"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td>
                            <a class="btn btn-warning btn-circle" href="index.php?page=customer&act=update&id=<?= $row["id_customer"]; ?>">
                                <i class="fa fa-pen"></i>
                            </a> |
                            <a class="btn btn-danger btn-circle" href="index.php?page=customer&act=delete&id=<?= $row["id_customer"]; ?>" onclick="return confirm('yakin?');">
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