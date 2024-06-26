<?php

$id_user = $_GET["id"];

$pdo = Koneksi::connect();
$user = new user($pdo);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    if ($user->ubah($id_user, $nama, $username, $password, $role)) {
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
        <h1 class="h3 mb-0 text-gray-800">ubah</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" class="col-sm-10 mb-3 mb-sm-0" required value="<?= $nama; ?>">
                </li>
                <li>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username" class="col-sm-10 mb-3 mb-sm-0" require value="<?= $username; ?>">
                </li>
                <li>
                    <label for="role">Role : </label>
                    <select class="form-control " name="role" id="role" class="col-sm-10 mb-3 mb-sm-0" require value="<?= $roll ?>">
                        <option value="admin">admin</option>
                        <option value="superAdmin">superAdmin</option>
                    </select>
                </li>
                <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password" class="col-sm-10 mb-3 mb-sm-0" require value="<?= $password; ?>">
                </li> <br>
                <li>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">ubah data</button>
                </li>
            </ul>
        </form>
    </div>



</div>