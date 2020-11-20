<?php

class BukuModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function getAllBuku()
    {
        return $this->db->query('SELECT * FROM buku JOIN kategori ON buku.id_kategori=kategori.id_kategori')->result();
    }

    public function addBuku($data)
    {
        $this->db->insert('buku', $data);
    }
}