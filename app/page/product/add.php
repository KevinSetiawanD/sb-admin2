<?php

if (isset($_POST["submit"])) {
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga_barang = $_POST["harga_barang"];
    $gambar_barang = $_POST["gambar_barang"];
    $pdo = Koneksi::connect();

    $product = new product($pdo);

    if ($product->tambah($nama_barang, $jumlah_barang, $harga_barang, $gambar_barang)) {
        echo "<script>window.location.href = 'index.php?page=product'</script>";
    }

    $pdo = Koneksi::disconnect();
}

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12 col-sm-8  col-md-6 col-lg-6 col-xl-30">
            <div class="card">
                <form action="" method="post" class="user">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_barang">Nama barang : </label> <br>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control form-control-user">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_barang">Jumlah barang : </label> <br>
                            <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control form-control-user">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga barang : </label> <br>
                            <input type="number" name="harga_barang" id="harga_barang" class="form-control form-control-user">
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