<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){ 
        parent::__construct(); 
        $this->load->library(array('form_validation')); 
        $this->load->helper(array('url','form')); 
        $this->load->model('template_user');
        $this->load->model('template');
        }
        
        // MENU USER ========================================
	public function index() {
                $data['judul'] = "Dashboard";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('profile', $data);
                $this->template_user->footer();
        }
	
	public function address() {
                $data['judul'] = "Alamat";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('address', $data);
                $this->template_user->footer();
        }
        
	public function historyorder() {
                $data['judul'] = "Riwayat Pemesanan";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('historyorder', $data);
                $this->template_user->footer();
        }
	
        // MENU USER ========================================
        
        
	
        // TRANSAKSI ========================================
	public function transaksi_jasa() {
                $data['judul'] = "Transaksi Jasa";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('jasa', $data);
                $this->template_user->footer();
        }
	
	public function transaksi_produk() {
                $data['judul'] = "Transaksi Produk";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('produk', $data);
                $this->template_user->footer();
        }
	
	public function status_pemesanan() {
                $data['judul'] = "Status Pemesanan";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('status', $data);
                $this->template_user->footer();
        }



        // LOGIN & REGISTER -------------------------------
        public function login() {
                $data['judul'] = "Masuk Akun";
                $this->template->header($data['judul']);
                $this->load->view('login', $data);
        }

        public function register() {
                $data['judul'] = "Daftar Akun";
                $this->template->header($data['judul']);
                $this->load->view('register', $data);
        }
}
