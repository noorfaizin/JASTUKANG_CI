<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
	}

	public function index() {
		$this->authenticated();
		if (!$this->session->userdata('user')) {
			show_404();
		}
		// $session = array(
    // 				'authenticated'=>true,
		// 				'user'=>'user'
    // 			);
					// $this->session->sess_destroy();
                $data['judul'] = "Beranda User";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('profile', $data);
                $this->load->view('template/footer', $data);
        }

	public function historyorder() {
                $data['judul'] = "Riwayat Pemesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('historyorder', $data);
                $this->load->view('template/footer', $data);
        }

	public function address() {
                $data['judul'] = "Alamat";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('address', $data);
                $this->load->view('template/footer', $data);
        }

	public function message() {
                $data['judul'] = "Pesan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('message', $data);
                $this->load->view('template/footer', $data);
        }

	public function transaksi_jasa() {
                $data['judul'] = "Transaksi Jasa";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('jasa', $data);
                $this->load->view('template/footer', $data);
        }

	public function transaksi_produk() {
                $data['judul'] = "Transaksi Produk";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('produk', $data);
                $this->load->view('template/footer', $data);
        }

	public function status_pemesanan() {
                $data['judul'] = "Status Pemesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('status', $data);
                $this->load->view('template/footer', $data);
        }



        // LOGIN & REGISTER -------------------------------
        public function login() {
                $data['judul'] = "Masuk Akun";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('login', $data);
        }

        public function register() {
                $data['judul'] = "Daftar Akun";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('register', $data);
        }
}
