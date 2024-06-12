<?php

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "data berhasil ditambahkan";
    } else {
        echo "data gagal ditambahkan";
    }
}

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama : </label> <br>
                    <input type="text" name="nama" id="nama" class="col-sm-10 mb-3 mb-sm-0">
                </li>
                <li>
                    <label for="username">Username : </label> <br>
                    <input type="text" name="username" id="username" class="col-sm-10 mb-3 mb-sm-0">
                </li>
                <li>
                    <label for="role">Role : </label> <br>
                    <select type="text" name="role" id="role" class="col-sm-10 mb-3 mb-sm-0">
                        <option name="role" id="" value="admin">admin</option>
                        <option name="role" id="" value="superAdmin">superAdmin</option>
                    </select>
                </li>
                <li>
                    <label for="password">Password : </label> <br>
                    <input type="password" name="password" id="passsword" class="col-sm-10 mb-3 mb-sm-0">
                </li> <br>
                <li>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah data</button>
                </li>
            </ul>
        </form>
    </div>



</div>