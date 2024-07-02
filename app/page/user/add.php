<?php

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $pdo = Koneksi::connect();

    $user = new user($pdo);

    if ($user->tambah($nama, $username, $password, $role)) {
    }

    $pdo = Koneksi::disconnect();
}

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12 col-sm-8  col-md-6 col-lg-6 col-xl-4">
            <div class="card">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama : </label> <br>
                            <input type="text" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username : </label> <br>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="role">Role : </label> <br>
                            <select type="text" name="role" id="role">
                                <option name="role" id="" value="admin">admin</option>
                                <option name="role" id="" value="superAdmin">superAdmin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label> <br>
                            <input type="password" name="password" id="passsword">
                        </div> <br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block col-20">Tambah data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>