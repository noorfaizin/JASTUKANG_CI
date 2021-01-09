<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	function __construct(){ 
                parent::__construct(); 
                $this->load->library(array('form_validation')); 
                $this->load->helper(array('url','form')); 
                $this->load->model('template_user');
	}
        
	public function index() {
                $data['judul'] = "Chat";
                $this->template_user->header($data['judul']);
                $this->template_user->sidebar();
                $this->template_user->topbar();
                $this->load->view('message', $data);
                $this->template_user->footer();
        }

}
