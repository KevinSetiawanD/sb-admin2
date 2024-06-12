<?php

$id = $_GET["id"];
$org = query("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "data berhasil diubahkan";
    } else {
        echo "data gagal diubahkan";
    }
}

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
            <input type="hidden" name="id" value="<?= $org["id"]; ?>">
            <ul>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required value="<?= $org["nama"] ?>">
                </li>
                <li>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username" value="<?= $org["username"] ?>">
                </li>
                <li>
                    <label for="role">Role : </label>
                    <input type="text" name="role" id="role" value="<?= $org["role"] ?>">
                </li>
                <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="passsword" value="<?= $org["password"] ?>">
                </li>
                <li>
                    <button type="submit" name="submit">ubah data</button>
                </li>
            </ul>
        </form>
    </div>



</div>