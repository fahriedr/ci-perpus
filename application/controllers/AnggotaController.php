<?php

class AnggotaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
    }

    public function index()
    {
        $data['anggota'] = $this->AnggotaModel->getAllAnggota();
        $this->load->view('anggota/index', $data);
    }

    public function addAnggota()
    {
        $number = rand(1000, 9999);
        $id = 'agt-' . $number;

        $nama = $this->input->post('nama');
        $jk = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $data = array(
            'id_anggota' => $id,
            'nama' => $nama,
            'jenis_kelamin' => $jk,
            'no_telp' => $no_telp,
            'alamat' => $alamat
        );

        $this->AnggotaModel->addAnggota($data);

        redirect('/anggota');
    }
}