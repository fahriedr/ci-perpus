<?php

class KategoriModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function getAllKategori()
    {
        return $this->db->get('kategori')->result();
    }

    public function addkategori($nama_kategori)
    {
        $data = array('nama_kategori' => $nama_kategori);

        $cek_data = $this->db->get_where('kategori', $data);

        $row = $cek_data->result();

        if ($row == null) {
            $this->db->insert('kategori', $data);
            return "Data berhasil Ditambahkan";
        } else {
            return "Nama kategori sudah dipakai";
        }
    }
}
