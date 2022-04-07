<?php

class DetailBarang extends CI_Controller
{

    public function detail($id_brg)
    {
        $data['barang'] = $this->ModelBarang->detail_brg($id_brg);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detailbrg_admin', $data);
        $this->load->view('templates_admin/footer');
    }
}
