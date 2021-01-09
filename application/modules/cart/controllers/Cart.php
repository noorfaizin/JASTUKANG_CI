<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){ 
                parent::__construct(); 
                $this->load->library(array('form_validation')); 
                $this->load->helper(array('url','form')); 
                $this->load->model('m_cart');
                $this->load->model('template_user');
	}
	
	public function index() {
                $data['judul'] = "Keranjang Belanja";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('keranjangbelanja', $data);
                $this->template_user->footer();
        }

        
}
