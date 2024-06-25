<?php

class user
{

    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function tambah($nama, $username, $password, $role)
    {
        $hashPw = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("INSERT INTO user VALUES ('', '$nama', '$username', '$hashPw', '$role' )");
        $stmt->execute();

        return true;
    }

    public function view()
    {
        $stmt = $this->db->prepare("SELECT * FROM user");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ubah($id_user, $nama, $username, $password, $role)
    {
        $stmt = $this->db->prepare("UPDATE user SET nama = '$nama', username = '$username', password = '$password', role = '$role' WHERE id_user = $id_user");
        $stmt->execute();

        return true;
    }

    public function hapus($id_user)
    {
        $stmt = $this->db->prepare("DELETE FROM user WHERE id_user = $id_user");
        $stmt->execute();

        return true;
    }

    public function getUser($id_user)
    {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id_user = $id_user");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
