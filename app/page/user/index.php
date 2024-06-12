<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php $i = 1; ?>
                <?php foreach ($orang as $row) :
                ?>
                    <tr>

                        <td><?= $i; ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><?= $row["role"] ?></td>
                        <td>
                            <a href="index.php?page=user&act=update&id=<?= $row["id_user"]; ?>">edit</a> |
                            <a href="index.php?page=user&act=delete&id=<?= $row["id_user"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </table>
        </div>

    </div>

</div>
<!-- End of Main Content -->