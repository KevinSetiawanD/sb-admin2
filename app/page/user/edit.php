<?php

$id_user = $_GET["id"];

$pdo = Koneksi::connect();
$user = new user($pdo);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $role = $_POST["role"];

    if ($user->ubah($id_user, $nama, $username, $role)) {
        echo "<script>window.location.href = 'index.php?page=user'</script>";
    }
}
if (isset($id_user)) {
    extract($user->getUser($id_user));
}

$pdo = Koneksi::disconnect();
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-30">
            <div class="card">
                <form action="" method="post" class="user">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-user" required value="<?= $nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username : </label>
                            <input type="text" name="username" id="username" class="form-control form-control-user" require value="<?= $username ?>">
                        </div>
                        <div class="form-group">
                            <label for="role">Role : </label>
                            <select name="role" id="role" class="form-control form-control-user" require value="<?= $roll ?>">
                                <option value="admin">admin</option>
                                <option value="superAdmin">superAdmin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Ubah data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>