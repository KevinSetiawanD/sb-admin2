<?php

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $pdo = Koneksi::connect();

    $supplier = new supplier($pdo);

    if ($supplier->tambah($nama, $no_telp, $alamat)) {
        echo "<script>window.location.href = 'index.php?page=supplier'</script>";
    }

    $pdo = Koneksi::disconnect();
}

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah supplier</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12 col-sm-8  col-md-6 col-lg-6 col-xl-30">
            <div class="card">
                <form action="" method="post" class="user">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama : </label> <br>
                            <input type="text" name="nama" id="nama" class="form-control form-control-user">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp : </label> <br>
                            <input type="text" name="no_telp" id="no_telp" class="form-control form-control-user">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat : </label> <br>
                            <input type="text" name="alamat" id="alamat" class="form-control form-control-user">
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