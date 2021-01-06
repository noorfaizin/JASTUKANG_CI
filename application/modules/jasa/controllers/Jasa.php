<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

      function __construct(){
          parent::__construct();
          $this->load->library(array('form_validation'));
          $this->load->helper(array('url','form'));
          $this->load->model('m_jasa');
          $this->load->model('template');
          //$this->_remap($this->router->fetch_method());
	     }

       function _remap($kat)
       {
         // if(method_exists($this,$kat)){
         //   $this->$kat();
         // }else{
         //   $this->index($kat);
         // }
         $param_offset = 2;

         if(!method_exists($this,$kat)){
           $param_offset = 1;
           $kat = 'index';
         }

         $params = array_slice($this->uri->rsegment_array(), $param_offset);

         call_user_func_array(array($this,$kat), $params);
       }

        public function index($kat='',$subKat='') {
          $data['judul'] = "Jasa Tukang";
          $sub = $this->input->post('subKat');
          $kat = $kat;
          $sub1 = $subKat;
          //die(print_r($sub1));
          if (!empty($sub)){
            $data['jasa'] = $this->m_jasa->getSubJasa($sub)->result();
          }else if(!empty($kat)){
            $data['jasa'] = $this->m_jasa->getKatJasa($kat)->result();
            if(!empty($sub1)){
              $data['jasa'] = $this->m_jasa->getSubJasa($sub1)->result();
            }
          }else {
            $data['jasa'] = $this->m_jasa->getAllJasa()->result();
          }
          //$this->load->view('template_frontend/header',$data);
          //$this->load->view('template_frontend/navbar',$data);
          $this->template->header();
          $this->template->navbar();
          $this->load->view('jasa', $data);
          $this->template->footer();
          //$this->load->view('template_frontend/footer',$data);
        }

        public function DetailJasa($id) {
          $data['judul'] = "Detail Jasa";
          $data['jasa'] = $this->m_jasa->getDetailJasa($id)->result();
          $data['kecamatan'] = $this->m_jasa->getKecamatan()->result();
          //die(print_r($data));
          $this->template->header();
          $this->template->navbar();
          $this->load->view('detail_jasa', $data);
          $this->template->footer();
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
          $data['kategori'] = $this->m_jasa->getKatSub('jasa_kategori');
          // $this->load->view('template_frontend/header', $data);
          // $this->load->view('template_frontend/navbar', $data);
          $this->template->header();
          $this->template->navbar();
          $this->load->view('daftar_jasa', $data);
          //$this->load->view('template_frontend/footer', $data);
          $this->template->footer();
        }

}
