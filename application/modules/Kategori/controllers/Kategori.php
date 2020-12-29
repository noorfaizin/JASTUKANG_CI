<?php
  class Kategori extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Kategori');
      $this->load->library(array('form_validation')); 
    }

    public function jasa()
    {
      $data['judul'] = "Kategori Jasa";
      $data['jasa_kategori'] = $this->M_Kategori->getJasaKategori();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index_jasa');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function material()
    {
      $data['judul'] = "Kategori Jasa";
      $data['jasa_kategori'] = $this->M_Kategori->getJasaKategori();
      $data['material_kategori'] = $this->M_Kategori->getMaterialKategori();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index_material');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function saveKategoriJasa()
    {
      $this->form_validation->set_rules('jasa', 'Nama Jasa', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Kategori/jasa'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_kategori' => $this->input->post('jasa', TRUE)
        ];
        $this->M_Kategori->saveKategoriJasa($data);
        redirect(base_url('Kategori/jasa'));
      }
    }

    public function saveKategoriMaterial()
    {
      $this->form_validation->set_rules('material', 'Nama Kategori Material', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('jasa', 'Nama Kategori Material', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Kategori/material'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_kategori' => $this->input->post('material', TRUE),
          'id_kategori_jasa' => $this->input->post('jasa', TRUE)
        ];
        $this->M_Kategori->saveKategoriMaterial($data);
        redirect(base_url('Kategori/material'));
      }
    }

    public function updateKategoriJasa($id)
    {
      $this->form_validation->set_rules('jasa', 'Nama Jasa', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Kategori/jasa'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_kategori' => $this->input->post('jasa', TRUE)
        ];
        $this->M_Kategori->updateKategoriJasa($data, $id);
        redirect(base_url('Kategori/jasa'));
      }
    }

    public function updateKategoriMaterial($id)
    {
      $this->form_validation->set_rules('material', 'Nama Kategori Material', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('jasa', 'Nama Kategori Material', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('Kategori/material'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_kategori' => $this->input->post('material', TRUE),
          'id_kategori_jasa' => $this->input->post('jasa', TRUE)
        ];
        $this->M_Kategori->updateKategoriMaterial($data, $id);
        redirect(base_url('Kategori/material'));
      }
    }

    public function hapusKategoriJasa($id)
    {
      $this->M_Kategori->hapusKategoriJasa($id);
      redirect(base_url('Kategori/jasa'));
    }

    public function hapusKategoriMaterial($id)
    {
      $this->M_Kategori->hapusKategoriMaterial($id);
      redirect(base_url('Kategori/material'));
    }
  }