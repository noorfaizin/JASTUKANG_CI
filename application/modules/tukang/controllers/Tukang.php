<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tukang extends CI_Controller {

	function __construct(){ 
        parent::__construct(); 
        $this->load->library(array('form_validation')); 
        $this->load->helper(array('url','form')); 
	}

	public function index() {
                $data['judul'] = "Beranda Tukang";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('profile', $data);
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

	public function jasa() {
                $data['judul'] = "Jasa Yang Dimiliki";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('jasa', $data);
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

	public function pesanan() {
                $data['judul'] = "Pesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('pesanan', $data);
                $this->load->view('template/footer', $data);
        }

	public function historyjob() {
                $data['judul'] = "Riwayat Pesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('historyjob', $data);
                $this->load->view('template/footer', $data);
        }

	public function saldo() {
                $data['judul'] = "Saldo Tukang";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('saldo', $data);
                $this->load->view('template/footer', $data);
        }
	
}
