<?php
$id = $_GET["id"];

$pdo = Koneksi::connect();

$supplier = new supplier($pdo);

$cek = $supplier->hapus($id);

if ($cek) {
    echo "<script>window.location.href = 'index.php?page=supplier'</script>";
}

$pdo = Koneksi::disconnect();
