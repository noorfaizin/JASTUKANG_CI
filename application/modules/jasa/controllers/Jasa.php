<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
	}

        public function index() {
                $data['judul'] = "Jasa Tukang";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('jasa', $data);
                $this->load->view('template_frontend/footer', $data);
        }

        public function Detailjasa() {
                $data['judul'] = "Detail Jasa";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('detail_jasa', $data);
                $this->load->view('template_frontend/footer', $data);
        }
        public function Renovasi() {
                $data['judul'] = "Jasa Renovasi";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('renovasi', $data);
                $this->load->view('template_frontend/footer', $data);
        }
        public function Instalasi() {
                $data['judul'] = "Jasa Instalasi";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('instalasi', $data);
                $this->load->view('template_frontend/footer', $data);
        }

        public function Pembangunan() {
                $data['judul'] = "Jasa Pembangunan";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('template_frontend/navbar', $data);
                $this->load->view('pembangunan', $data);
                $this->load->view('template_frontend/footer', $data);
        }

}
