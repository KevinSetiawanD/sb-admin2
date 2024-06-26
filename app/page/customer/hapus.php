<?php
$id = $_GET["id"];

$pdo = Koneksi::connect();

$customer = new customer($pdo);

$cek = $customer->hapus($id);

if ($cek) {
    echo "<script>window.location.href = 'index.php?page=customer'</script>";
}

$pdo = Koneksi::disconnect();
