<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
	}

	public function index() {
                $data['judul'] = "JasTukang - Log In";
                $this->load->view('template_frontend/header', $data);
                $this->load->view('login', $data);
        }
}
