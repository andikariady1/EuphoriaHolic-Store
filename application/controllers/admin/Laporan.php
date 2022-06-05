<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function laporan_pakaian()
    {
        $data['judul'] = 'Laporan Data Pakaian';
        $data['user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
        $data['barang'] = $this->ModelBarang->tampil_data()->result_array();
        $data['kategori'] = $this->ModelBarang->getKategori(['kategori' => $this->session->userdata('kategori')])->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('barang/laporan_pakaian', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak_laporan_pakaian()
    {
        $data['barang'] = $this->ModelBarang->tampil_data()->result_array();
        $data['kategori'] = $this->ModelBarang->getKategori(['kategori' => $this->session->userdata('kategori')])->result_array();

        $this->load->view('barang/laporan_print_pakaian', $data);
    }

    public function laporan_barang_pdf()
    { {
            //$this->load->library('dompdf_gen');
            $data['barang'] = $this->ModelBarang->tampil_data()->result_array();
            $sroot = $_SERVER['DOCUMENT_ROOT'];
            include $sroot . "/pustaka-booking/application/third_party/dompdf/autoload.inc.php";
            //$dompdf = new Dompdf\Dompdf();

            $this->load->view('barang/laporan_pdf', $data);


            $paper_size = 'A4'; //ukuran kertas
            $orientation = 'landscape'; //tipe format kertas
            $html = $this->output->get_output();

            $dompdf->set_paper($paper_size, $orientation);
            //convert to PDF
            $dompdf->load_html($html);
            $dompdf->render();
            $dompdf->stream("laporan_data_barang.pdf", array("Attachment" => 0));
            //nama file PDF yg dihasilkan
        }
    }

    public function export_excel()
    {
        $data = array(
            'title' => 'Laporan Barang',
            'barang' => $this->ModelBarang->tampil_data()->result_array()
        );
        $this->load->view('barang/export_excel', $data);
    }

    public function laporan_pelanggan()
    {
        $data['judul'] = 'Data Pelanggan';
        $data['user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
        $this->db->where('role_id', 2);
        $data['pelanggan'] = $this->db->get('user')->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('user/laporan_pelanggan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak_laporan_pelanggan()
    {
        $data['judul'] = 'Data Pelanggan';
        $data['user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
        $this->db->where('role_id', 2);
        $data['pelanggan'] = $this->db->get('user')->result_array();

        $this->load->view('user/laporan_print_pelanggan', $data);
    }

    public function laporan_pembelian()
    {

        $data['judul'] = 'Laporan Data Pembelian';
        $data['user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->db->get('pesanan')->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pesanan/laporan_pesanan', $data);
        $this->load->view('templates_admin/footer');
    }
}
