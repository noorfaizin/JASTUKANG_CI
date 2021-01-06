<?php
  class Jasa extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Jasa');
    }

    public function index()
    {
      $data['judul'] = "Jasa Dashboard";
      $jasa['jasa'] = $this->M_Jasa->getAllJasa();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index', $jasa);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function addJasa()
    {
      $data['judul'] = "Tambah Jasa";
      $jasa['kategori'] = $this->M_Jasa->getKategori();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('add', $jasa);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editJasa($id_jasa)
    {
      $data['judul'] = "Ubah Jasa";
      $jasa['kategori'] = $this->M_Jasa->getKategori();
      $jasa['jasa'] = $this->M_Jasa->getJasaById($id_jasa);
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit', $jasa);
      $this->load->view('Dashboard/Template_backend/footer');
    }





    public function savejasa()
    {
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('waktu', 'Waktu Pengerjaan', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $pesan = "Gagal Ditambahkan";
        $jasa = "Jasa";
        $tema = "error";
        $this->get_flashdata($pesan, $jasa, $tema);
      } else {
        $pesan = "Berhasil Ditambahkan";
        $jasa = "Jasa";
        $tema = "success";
        $this->get_flashdata($pesan, $jasa, $tema);
        $data= [ 
          'nama_jasa' => $this->input->post('nama', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'waktu' => $this->input->post('waktu', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE)
        ];
        $this->M_Jasa->saveJasa($data);
      }
      redirect(base_url('Jasa'));
    }

    public function updateJasa($id)
    {
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('waktu', 'Waktu Pengerjaan', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Jasa', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $pesan = "Gagal Diubah";
        $jasa = "Jasa";
        $tema = "error";
        $this->get_flashdata($pesan, $jasa, $tema);
      } else {
        $pesan = "Berhasil Diubah";
        $jasa = "Jasa";
        $tema = "success";
        $this->get_flashdata($pesan, $jasa, $tema);
        $data= [ 
          'nama_jasa' => $this->input->post('nama', TRUE),
          'waktu' => $this->input->post('waktu', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE)
        ];
        $this->M_Jasa->updateJasa($data, $id);
      }
      redirect(base_url('Jasa'));
    }

    public function deleteJasa($id)
    {
      $pesan = "Berhasil Dihapus";
      $jasa = "Jasa";
      $tema = "success";
      $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
      $this->M_Jasa->deleteJasa($id);
      redirect('Jasa');
    }

    private function get_flashdata($pesan, $jasa, $tema)    
    {
      $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
    }

  }