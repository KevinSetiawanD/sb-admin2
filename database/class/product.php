<?php

class product
{

    private $db;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }

    public function tambah($nama_barang, $jumlah_barang, $harga_barang, $gambar_barang)
    {
        $stmt = $this->db->prepare("INSERT INTO product VALUES ('', '$nama_barang', '$jumlah_barang', '$harga_barang', '$gambar_barang')");
        $stmt->execute();

        return true;
    }

    public function view()
    {
        $stmt = $this->db->prepare("SELECT * FROM product");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ubah($id_product, $nama_product, $jumlah_product, $harga_product)
    {
        $stmt = $this->db->prepare("UPDATE product SET nama_product = '$nama_product', jumlah_product = '$jumlah_product', harga_product = '$harga_product' WHERE id_product = $id_product");
        $stmt->execute();

        return true;
    }

    public function hapus($id_product)
    {
        $stmt = $this->db->prepare("DELETE FROM product WHERE id_product = $id_product");
        $stmt->execute();

        return true;
    }

    public function getProduct($id_product)
    {
        $stmt = $this->db->prepare("SELECT * FROM product WHERE id_product = $id_product");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
