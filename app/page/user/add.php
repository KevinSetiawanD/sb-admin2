<?php
require '../layout/sidebar.php';
require '../layout/header.php';
require '../layout/footer.php';
require '../../../database/koneksi.php';

if( isset($_POST["submit"])) {
    if(tambah($_POST) > 0 ) {
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
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="role">Role : </label>
                    <input type="text" name="role" id="role">
                </li>
                <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="passsword">
                </li>
                <li>
                    <button type="submit" name="submit">tambah data</button>
                </li>
            </ul>
        </form>
    </div>



</div>