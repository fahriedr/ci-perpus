<?php


class AnggotaModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllAnggota()
    {
        return $this->db->get('anggota')->result();
    }

    public function addAnggota($data)
    {
        $this->db->insert('anggota', $data);
    }
}