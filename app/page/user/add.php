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
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-30">
            <div class="card">
                <form action="" method="post" class="user">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-user" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username : </label>
                            <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="role">Role : </label>
                            <select type="text" name="role" id="role" class="form-control form-control-user">
                                <option name="role" id="role" value="admin">admin</option>
                                <option name="role" id="role" value="superAdmin">superAdmin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="passsword" class="form-control form-control-user" placeholder="password">
                        </div> <br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>