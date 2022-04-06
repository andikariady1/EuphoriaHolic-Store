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


    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->ModelKategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }
}
