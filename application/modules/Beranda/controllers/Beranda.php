<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Beranda extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Beranda');
    }

    public function Index()
    {
      $this->load->view('Template_frontend/header');
      $this->load->view('Template_frontend/navbar');
      $this->load->view('Beranda');
      $this->load->view('Template_frontend/footer');
    }

    public function detailProduct($id_material)
    {
      $product['detail_product'] = $this->M_Beranda->getProductBy($id_material);
      $this->load->view('Template_frontend/header');
      $this->load->view('Template_frontend/navbar');
      $this->load->view('detail_product', $product);
      $this->load->view('Template_frontend/footer');
    }

    public function cart()
    {
      
      $product['cart'] = $this->M_Beranda->getAllCart($this->session->userdata('id_user'));
      $this->load->view('Template_frontend/header');
      $this->load->view('Template_frontend/navbar');
      $this->load->view('cart', $product);
      $this->load->view('Template_frontend/footer');
    }

    public function checkout()
    {
      $product['metode_pembayaran'] = $this->M_Beranda->getMetodePembayaran();
      $product['kecamatan'] = $this->M_Beranda->getKecamatan();
      $product['cart'] = $this->M_Beranda->getAllCart($this->session->userdata('id_user'));
      $this->load->view('Template_frontend/header');
      $this->load->view('Template_frontend/navbar');
      $this->load->view('checkout', $product);
      $this->load->view('Template_frontend/footer');
    }



    public function co()
    {
      $this->form_validation->set_rules('nomor', 'Nomor HP Penerima', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('nama', 'Nama Penerima', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('alamat', 'Alamat Penerima', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('metode_pembayaran', 'Metode Pembayaran', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run()) {
        $this->M_Beranda->co();
      }
      redirect(base_url('Beranda/cart'));
    }

    public function atc($id_material)
    {
      $this->form_validation->set_rules('qty', 'Quantity', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      if ($this->form_validation->run()) {
        $qty = $this->input->post('qty', TRUE);
        $this->M_Beranda->addToCart($id_material, $qty);
      }
      redirect(base_url('Beranda/cart'));
    }
  }


?>
