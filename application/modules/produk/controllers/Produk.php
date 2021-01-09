<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){ 
                parent::__construct(); 
                $this->load->library(array('form_validation')); 
                $this->load->helper(array('url','form')); 
                $this->load->model('template');
	}
	
	public function index() {
                $data['judul'] = "Daftar Produk";
                $this->template->header($data['judul']);
                $this->template->navbar();
                $this->load->view('semuaproduk', $data);
                $this->template->footer();
        }

        public function detail() {
                $data['judul'] = "Detail Produk";
                $this->template->header($data['judul']);
                $this->template->navbar();
                $this->load->view('detail_produk', $data);
                $this->template->footer();
        }
}
