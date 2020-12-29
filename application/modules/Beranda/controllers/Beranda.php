<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Beranda extends CI_Controller{

    public function Index()
    {
      $this->load->view('Template_frontend/header');
      $this->load->view('Template_frontend/navbar');
      $this->load->view('Beranda');
      $this->load->view('Template_frontend/footer');
    }
  }


?>
