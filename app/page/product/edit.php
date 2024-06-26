<?php

$id_product = $_GET['id'];

$pdo = Koneksi::connect();
$product = new product($pdo);

if (isset($_POST["submit"])) {
    $nama_produk = $_POST["nama_produk"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga_barang = $_POST["harga_barang"];

    if ($product->ubah($id_product, $nama_produk, $jumlah_barang, $harga_barang)) {
        echo "<script>window.location.href = 'index.php?page=product'</script>";
    }
}

if (isset($id_product)) {
    extract($product->getProduct($id_product));
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
        <div class="col-12 col-sm-8  col-md-6 col-lg-6 col-xl-4">
            <div class="card">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_produk">Nama barang : </label> <br>
                            <input type="text" name="nama_produk" id="nama_produk" required value="<?= $nama_product ?>">
                        </div>
                        <div class=" form-group">
                            <label for="jumlah_barang">Jumlah barang : </label> <br>
                            <input type="number" name="jumlah_barang" id="jumlah_barang" value="<?= $jumlah_product ?>">
                        </div>
                        <div class=" form-group">
                            <label for="harga_barang">Harga barang : </label> <br>
                            <input type="number" name="harga_barang" id="harga_barang" value="<?= $harga_product ?>">
                        </div> <br>
                        <div class=" form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block col-20">Ubah data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>