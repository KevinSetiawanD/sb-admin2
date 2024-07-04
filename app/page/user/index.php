<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="m-0 font-weight-bold text-primary">User</h4>
        <a href="index.php?page=user&act=create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah User</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>

                    <?php

                    $pdo = Koneksi::connect();
                    $user = new user($pdo);

                    $orang = $user->view();


                    foreach ($orang as $row) :
                    ?>
                        <tr>

                            <td><?= $i; ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["username"] ?></td>
                            <td><?= $row["role"] ?></td>
                            <td>
                                <a class="btn btn-warning btn-circle" href="index.php?page=user&act=update&id=<?= $row["id_user"]; ?>">
                                    <i class="fa fa-pen " aria-hidden="true"></i>
                                </a> |
                                <a class="btn btn-danger btn-circle" href="index.php?page=user&act=delete&id=<?= $row["id_user"]; ?>" onclick="return confirm('yakin?');">
                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach;

                    $pdo = Koneksi::disconnect();
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- End of Main Content -->