<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

        function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('m_jasa');
	}

        public function index() {
                $data['judul'] = "Jasa Tukang";
                $data['kategori'] = $this->m_jasa->getAll('jasa_kategori');
                //die(var_dump($data['kategori']));
                //$data['subKategori'] = $this->m_jasa->getAll('jasa_sub_kategori')->result();
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
