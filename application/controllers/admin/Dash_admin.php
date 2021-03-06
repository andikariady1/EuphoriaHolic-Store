<?php

class Dash_admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model(['ModelUser']);

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['pelanggan'] = $this->ModelUser->getUserLimit()->result_array();
        $data['barang'] = $this->ModelBarang->getLimitBarang()->result_array();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
