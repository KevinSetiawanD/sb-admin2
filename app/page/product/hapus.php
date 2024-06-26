<?php
$id = $_GET["id"];

$pdo = Koneksi::connect();

$product = new product($pdo);

$cek = $product->hapus($id);

if ($cek) {
    echo "<script>window.location.href = 'index.php?page=product'</script>";
}

$pdo = Koneksi::disconnect();
