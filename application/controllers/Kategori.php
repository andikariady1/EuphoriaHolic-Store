<?php

class Kategori extends CI_Controller
{
    public function tshirt_pria()
    {
        $data['tshirt_pria'] = $this->ModelKategori->data_tshirt_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tshirt_pria', $data);
        $this->load->view('templates/footer');
    }

    public function kemeja_pria()
    {
        $data['kemeja_pria'] = $this->ModelKategori->data_kemeja_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kemeja_pria', $data);
        $this->load->view('templates/footer');
    }

    public function jaket_pria()
    {
        $data['jaket_pria'] = $this->ModelKategori->data_jaket_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jaket_pria', $data);
        $this->load->view('templates/footer');
    }

    public function hoodie_pria()
    {
        $data['hoodie_pria'] = $this->ModelKategori->data_hoodie_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('hoodie_pria', $data);
        $this->load->view('templates/footer');
    }

    public function batik_pria()
    {
        $data['batik_pria'] = $this->ModelKategori->data_batik_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('batik_pria', $data);
        $this->load->view('templates/footer');
    }

    public function dress_wanita()
    {
        $data['dress_wanita'] = $this->ModelKategori->data_dress_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dress_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function hoodie_wanita()
    {
        $data['hoodie_wanita'] = $this->ModelKategori->data_hoodie_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('hoodie_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function jaket_wanita()
    {
        $data['jaket_wanita'] = $this->ModelKategori->data_jaket_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jaket_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function rok_wanita()
    {
        $data['rok_wanita'] = $this->ModelKategori->data_rok_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rok_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function cardigan_wanita()
    {
        $data['cardigan_wanita'] = $this->ModelKategori->data_cardigan_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cardigan_wanita', $data);
        $this->load->view('templates/footer');
    }
}
