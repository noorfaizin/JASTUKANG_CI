<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){ 
        parent::__construct(); 
        $this->load->library(array('form_validation')); 
        $this->load->helper(array('url','form')); 
	}
	
	public function index() {
        $data['judul'] = "JasTukang - Make Your Home Be Better";
        $this->load->view('Template_frontend/header', $data);
        $this->load->view('template_frontend/navbar', $data);
        $this->load->view('beranda', $data);
        $this->load->view('template_frontend/footer', $data);
    }
}
