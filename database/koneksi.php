<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "kasir";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Tidak bisa terkoneksi ke database");
}


function query($query) {
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }
    return $rows;
}


function tambah($data) {
    global $koneksi;

    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $role = $data["role"];

    $query = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$role' )";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

function ubah($data) {
    global $koneksi;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $role = $data["role"];

    $query = "UPDATE user SET 
                nama = '$nama',
                username = '$username',
                role = '$role',
                password = '$password'
                WHERE id = $id  
                ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}

?>

