<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Dashboard extends CI_Controller{
    private $cek_admin = null;

    public function __construct()
    {
      parent::__construct();
      $this->cek_admin = $this->simple_login->cek_admin();
    }

    public function Index()
    {
      $this->cek_admin;
      $data['judul'] = "Dashboard | Jastukang";
      $this->load->view('Template_backend/header', $data);
      $this->load->view('Template_backend/sidebar');
      $this->load->view('Template_backend/topbar');
      $this->load->view('Index_dashboard');
      $this->load->view('Template_backend/footer');
    }
  }

