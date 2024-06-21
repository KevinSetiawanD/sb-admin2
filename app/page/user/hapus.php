<?php
$id = $_GET["id"];

$pdo = Koneksi::connect();

$user = new user($pdo);

$cek = $user->hapus($id);

if ($cek) {
    echo "<script>window.location.href = 'index.php?page=user'</script>";
}

$pdo = Koneksi::disconnect();
