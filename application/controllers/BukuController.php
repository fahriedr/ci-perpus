<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BukuController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BukuModel');
        $this->load->model('KategoriModel');
        $this->load->library('session');
    }

    public function index()
    {
        $data['buku'] = $this->BukuModel->getAllBuku();
        $data['kategori'] = $this->KategoriModel->getAllKategori();
        $this->load->view('buku/daftar_buku', $data);
    }

    public function addBuku()
    {

        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');


        if ($this->form_validation->run() != false) {
            $id = rand(100000, 999999);
            $judul_buku = $this->input->post('judul_buku');
            $id_kategori = $this->input->post('id_kategori');
            $penulis = $this->input->post('penulis');
            $penerbit = $this->input->post('penerbit');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $jumlah_hal = $this->input->post('jumlah_hal');

            $data = array(
                'id_buku' => $id,
                'judul_buku' => $judul_buku,
                'id_kategori' => $id_kategori,
                'penulis' => $penulis,
                'penerbit' => $penerbit,
                'tahun_terbit' => $tahun_terbit,
                'jumlah_hal' => $jumlah_hal,
            );

            $this->BukuModel->addBuku($data);

            $this->session->set_flashdata('Success', 'Buku Berhasil Ditambahkan ');
            redirect('/buku');
        } else {
            redirect('/buku');
        }
    }

    public function editBuku($id)
    {
        $data['kategori'] = $this->KategoriModel->getAllKategori();
        $data['buku'] = $this->BukuModel->getBuku($id);

        if ($data['buku'] == null) {
            redirect('/buku');
        }
        $this->load->view('buku/edit_buku', $data);
    }

    public function updateBuku($id)
    {
        $judul_buku = $this->input->post('judul_buku');
        $id_kategori = $this->input->post('id_kategori');
        $penulis = $this->input->post('penulis');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $jumlah_hal = $this->input->post('jumlah_hal');

        $data_buku = array(
            'judul_buku' => $judul_buku,
            'id_kategori' => $id_kategori,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'jumlah_hal' => $jumlah_hal,
        );

        $this->BukuModel->updateBuku($id, $data_buku);

        redirect('/buku');
    }

    public function deleteBuku($id)
    {
        $data = $this->BukuModel->deleteBuku($id);

        $this->session->set_flashdata($data['status'], $data['message']);
        redirect('/buku');
    }

    public function detailBuku($id)
    {
        $data['buku'] = $this->BukuModel->getBuku($id);



        if ($data['buku'] != null) {
            $this->load->view('buku/detail_buku', $data);
        } else {
            $this->session->set_flashdata('Error', 'Data tidak ditemukan');
            redirect('/buku');
        }
    }
}
