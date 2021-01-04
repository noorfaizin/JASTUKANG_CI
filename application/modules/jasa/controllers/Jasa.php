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
          $sub = $this->input->post('subKat');
          if (!empty($sub)){
            $data['jasa'] = $this->m_jasa->getJasa($sub)->result();
          }else{
            $data['jasa'] = $this->m_jasa->getAllJasa();
          }
          $this->load->view('template_frontend/header',$data);
          $this->load->view('template_frontend/navbar',$data);
          $this->load->view('jasa', $data);
          $this->load->view('template_frontend/footer',$data);
        }

        public function DetailJasa($id) {
          $data['judul'] = "Detail Jasa";
          $data['jasa'] = $this->m_jasa->getDetailJasa($id)->result();
          $data['kecamatan'] = $this->m_jasa->getKecamatan()->result();
          //die(print_r($data));
          $this->load->view('template_frontend/header', $data);
          $this->load->view('template_frontend/navbar', $data);
          $this->load->view('detail_jasa', $data);
          $this->load->view('template_frontend/footer', $data);
        }
        public function get_kelurahan()
        {
          $kecamatan = $this->input->post('id', TRUE);
    			$data = $this->m_jasa->getKelurahan($kecamatan)->result();
    			foreach ($data as $row) {
    				echo '<option value="'.$row->id_kelurahan.'">'.$row->kelurahan.'</option>';
    			}
        }
        public function DaftarJasa() {
          $data['judul'] = "Jasa Tukang";
          $data['kategori'] = $this->m_jasa->getKatJasa('jasa_kategori');
          $this->load->view('template_frontend/header', $data);
          $this->load->view('template_frontend/navbar', $data);
          $this->load->view('daftar_jasa', $data);
          $this->load->view('template_frontend/footer', $data);
        }

}
