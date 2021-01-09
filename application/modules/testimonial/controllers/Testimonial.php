<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	function __construct(){ 
                parent::__construct(); 
                $this->load->library(array('form_validation')); 
                $this->load->helper(array('url','form')); 
                $this->load->model('template');
	}
	
	public function index() {
                $data['judul'] = "Testimonial";
                $this->template->header($data['judul']);
                $this->template->navbar();
                $this->load->view('testimoni', $data);
                $this->template->footer();
        }
}
