<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
				$this->load->model('m_beranda');
				$this->load->model('template');
	}

	public function index() {
				$data['kategori'] = $this->m_beranda->getKat('jasa_kategori')->result();
        //$this->load->view('template_frontend/header', $data);
				$this->template->header();
				$this->template->navbar();
				//$this->load->view('template_frontend/navbar', $data);
        $this->load->view('beranda', $data);
				$this->template->footer();
        //$this->load->view('template_frontend/footer', $data);
    }
		public function get_sub_kat(){
			$kategori = $this->input->post('id', TRUE);
			$data = $this->m_beranda->getSubKat($kategori)->result();
			foreach ($data as $row) {
				echo '<option value="'.$row->id_sub_kategori_jasa.'">'.$row->nama_sub_kategori_jasa.'</option>';
			}
		}
}
