<?php


class KategoriController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
    }

    public function index()
    {
        $data['kategori'] = $this->KategoriModel->getAllKategori();
        $this->load->view('buku/daftar_kategori', $data);
    }

    public function addKategori()
    {
       $nama_kategori = $this->input->post('nama_kategori');
       
       $data = $this->KategoriModel->addKategori($nama_kategori);
       
       redirect('/kategori', $data);
    }
}


?>