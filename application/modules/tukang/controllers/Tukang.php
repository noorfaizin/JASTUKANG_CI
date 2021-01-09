<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tukang extends CI_Controller {

	function __construct(){ 
                parent::__construct(); 
                $this->load->library(array('form_validation')); 
                $this->load->helper(array('url','form')); 
                $this->load->model('template_user');
	}
        
        // MENU TUKANG ============================================
	public function index() {
                $data['judul'] = "Jasa Yang Dimiliki";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('jasadimiliki', $data);
                $this->template_user->footer();
        }
        // MENU TUKANG ============================================

        // TRANSAKSI ============================================
        public function pesanan() {
                $data['judul'] = "Pesanan Tertunda";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('pesanan', $data);
                $this->template_user->footer();
        }

	public function historyjob() {
                $data['judul'] = "Riwayat Pemesanan";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('historyjob', $data);
                $this->template_user->footer();
        }

	public function saldo() {
                $data['judul'] = "Saldo";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('saldo', $data);
                $this->template_user->footer();
        }

}
