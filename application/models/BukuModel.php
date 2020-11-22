<?php

class BukuModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllBuku()
    {
        return $this->db->query('SELECT id_buku, judul_buku, nama_kategori, penulis FROM buku JOIN kategori ON buku.id_kategori=kategori.id_kategori')->result();
    }

    public function getBuku($id)
    {
        $cek_data = $this->db->get_where('buku', array('id_buku' => $id))->row();

        return $cek_data;
    }

    public function addBuku($data)
    {
        $this->db->insert('buku', $data);
    }

    public function updateBuku($id, $data)
    {
        $this->db->where('id_buku', $id);
        $this->db->update('buku', $data);
    }

    public function deleteBuku($id)
    {
        $cek_data = $this->db->get_where('buku', array('id_buku' => $id));

        $row = $cek_data->row();

        if ($row == null) {
            return array('status' => 'Error', 'message' => 'Data tidak ditemukan');
        } else {
            $this->db->delete('buku', array('id_buku' => $id));
            return array('status' => 'Success', 'message' => "Data berhasil dihapus");
        }
    }
}
