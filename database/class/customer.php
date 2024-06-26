<?php

class customer
{

    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function tambah($nama, $no_telp, $alamat)
    {
        $stmt = $this->db->prepare("INSERT INTO customers VALUES ('', '$nama', '$no_telp', '$alamat')");
        $stmt->execute();

        return true;
    }

    public function view()
    {
        $stmt = $this->db->prepare("SELECT * FROM customers");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ubah($id_customer, $nama, $no_telp, $alamat)
    {
        $stmt = $this->db->prepare("UPDATE customers SET nama = '$nama', no_telp = '$no_telp', alamat = '$alamat' WHERE id_customer = $id_customer");
        $stmt->execute();

        return true;
    }

    public function hapus($id_customer)
    {
        $stmt = $this->db->prepare("DELETE FROM customers WHERE id_customer = $id_customer");
        $stmt->execute();

        return true;
    }

    public function getCustomer($id_customer)
    {
        $stmt = $this->db->prepare("SELECT * FROM customers WHERE id_customer = $id_customer");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
