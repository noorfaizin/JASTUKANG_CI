<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

<<<<<<< HEAD
	function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
	}

	public function index() {
                $data['judul'] = "Daftar Produk";
                $this->load->view('template_frontend/header', $data);
=======
	function __construct(){ 
        parent::__construct(); 
        $this->load->library(array('form_validation')); 
        $this->load->helper(array('url','form')); 
	}
	
	public function index() {
                $data['judul'] = "Daftar Produk";
                $this->load->view('Template_frontend/header', $data);
>>>>>>> 05607640c44faebf748d2c9ca903137e3892f597
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('semuaproduk', $data);
                $this->load->view('template_frontend/footer', $data);
        }

        public function detail() {
                $data['judul'] = "Detail Produk";
                $this->load->view('Template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('detail_produk', $data);
                $this->load->view('template_frontend/footer', $data);
        }
}
