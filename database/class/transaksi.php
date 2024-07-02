<?php

class transaksi
{

    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function view()
    {
        $stmt = $this->db->prepare("SELECT * FROM transaksi");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // public function tambah($id_customer, $tanggal_transaksi)
    // {
    //     $stmt = $this->db->prepare("INSERT INTO transaksi VALUES ('', '$id_customer', '$tanggal_transaksi')");
    //     $stmt->execute();

    //     return true;
    // }
}
