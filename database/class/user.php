<?php

class user
{

    public function tambah($data)
    {
        global $koneksi;

        $nama = $data["nama"];
        $username = $data["username"];
        $password = $data["password"];
        $role = $data["role"];

        $query = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$role' )";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    public function ubah($data)
    {
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

    public function hapus($id)
    {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");

        return mysqli_affected_rows($koneksi);
    }
}
