<?php

class supplier
{

    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function tambah($nama, $no_telp, $alamat)
    {
        $stmt = $this->db->prepare("INSERT INTO supplier VALUES ('', '$nama', '$no_telp', '$alamat')");
        $stmt->execute();

        return true;
    }

    public function view()
    {
        $stmt = $this->db->prepare("SELECT * FROM supplier");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ubah($id_supplier, $nama, $no_telp, $alamat)
    {
        $stmt = $this->db->prepare("UPDATE supplier SET nama = '$nama', no_telp = '$no_telp', alamat = '$alamat' WHERE id_supplier = $id_supplier");
        $stmt->execute();

        return true;
    }

    public function hapus($id_supplier)
    {
        $stmt = $this->db->prepare("DELETE FROM supplier WHERE id_supplier = $id_supplier");
        $stmt->execute();

        return true;
    }

    public function getsupplier($id_supplier)
    {
        $stmt = $this->db->prepare("SELECT * FROM supplier WHERE id_supplier = $id_supplier");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
