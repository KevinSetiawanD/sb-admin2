<?php
$pdo = Koneksi::connect();
$customer = new customer($pdo);

$id_customer = $_GET['id'];

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];


    if ($customer->ubah($id_customer, $nama, $no_telp, $alamat)) {
        echo "<script>window.location.href = 'index.php?page=customer'</script>";
    }
}
if (isset($id_customer)) {
    extract($customer->getCustomer($id_customer));
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
                            <label for="nama">Nama : </label> <br>
                            <input type="text" name="nama" id="nama" required value="<?= $nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp : </label> <br>
                            <input type="text" name="no_telp" id="no_telp" required value="<?= $no_telp; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat : </label> <br>
                            <input type="alamat" name="alamat" id="alamat" required value="<?= $alamat; ?>">
                        </div> <br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block col-20">Ubah data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>