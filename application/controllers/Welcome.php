<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['ModelUser', 'ModelBarang']);
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['barang'] = $this->ModelBarang->tampil_data()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function detail_keranjang()
	{
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('keranjang', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('keranjang', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function pembayaran()
	{
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('pembayaran', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('pembayaran', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function tshirt_pria()
	{
		$data['tshirt_pria'] = $this->ModelKategori->data_tshirt_pria()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('tshirt_pria', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('tshirt_pria', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function kemeja_pria()
	{
		$data['kemeja_pria'] = $this->ModelKategori->data_kemeja_pria()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('kemeja_pria', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('kemeja_pria', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function jaket_pria()
	{
		$data['jaket_pria'] = $this->ModelKategori->data_jaket_pria()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('jaket_pria', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('jaket_pria', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function hoodie_pria()
	{
		$data['hoodie_pria'] = $this->ModelKategori->data_hoodie_pria()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('hoodie_pria', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('hoodie_pria', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function batik_pria()
	{
		$data['batik_pria'] = $this->ModelKategori->data_batik_pria()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('batik_pria', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('batik_pria', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function dress_wanita()
	{
		$data['dress_wanita'] = $this->ModelKategori->data_dress_wanita()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('dress_wanita', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dress_wanita', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function hoodie_wanita()
	{
		$data['hoodie_wanita'] = $this->ModelKategori->data_hoodie_wanita()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('hoodie_wanita', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('hoodie_wanita', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function jaket_wanita()
	{
		$data['jaket_wanita'] = $this->ModelKategori->data_jaket_wanita()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('jaket_wanita', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('jaket_wanita', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function rok_wanita()
	{
		$data['rok_wanita'] = $this->ModelKategori->data_rok_wanita()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('rok_wanita', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('rok_wanita', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function cardigan_wanita()
	{
		$data['cardigan_wanita'] = $this->ModelKategori->data_cardigan_wanita()->result();
		if ($this->session->userdata('username')) {
			$user = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

			$data['user'] = $user['nama'];

			$this->load->view('templates_user/header', $data);
			$this->load->view('templates_user/sidebar');
			$this->load->view('cardigan_wanita', $data);
			$this->load->view('templates_user/footer', $data);
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('cardigan_wanita', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
