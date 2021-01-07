<?php
  class Admin extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Admin');
    }

    public function index()
    {
      $data['judul'] = "Admin Dashboard";
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index_admin');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    /* =============== METODE PEMBAYARAN =============== */
    public function methodPembayaran()
    {
      $data['judul'] = "Dashboard Metode Pembayaran";
      $admin['mpembayaran'] = $this->M_Admin->getMethodPembayaran();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('method_pembayaran/index', $admin);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function addMPembayaran()
    {
      $data['judul'] = "Tambah Metode Pembayaran";
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('method_pembayaran/add');
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editMPembayaran($id_rekening)
    {
      $data['judul'] = "Ubah Metode Pembayaran";
      $admin['rekening'] = $this->M_Admin->getMethodPembayaranBy($id_rekening);
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('method_pembayaran/edit', $admin);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function editAdmin($id_admin)
    {
      $data['judul'] = "Ubah Admin";
      $admin['kategori'] = $this->M_Admin->getKategori();
      $admin['admin'] = $this->M_Admin->getAdminById($id_admin);
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('edit', $admin);
      $this->load->view('Dashboard/Template_backend/footer');
    }
    /* =============== METODE PEMBAYARAN =============== */

    /* ===================== SALDO ===================== */
    public function saldo()
    {
      $data['judul'] = "Dashboard Metode Pembayaran";
      $admin['saldo'] = $this->M_Admin->getSaldo();
      $admin['id_transaksi'] = $this->M_Admin->getTransaksi();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('saldo/index', $admin);
      $this->load->view('Dashboard/Template_backend/footer');
    }
    /* ===================== SALDO ===================== */

    public function penarikanDana()
    {
      $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      if ($this->form_validation->run() == false) {
        $pesan = "Gagal Ditambahkan";
        $method = "Penarikan Dana";
        $tema = "error";
        $this->get_flashdata($pesan, $method, $tema);
      } else {
        $this->M_Admin->penarikanDana();
      }
      redirect('Admin/saldo');
    }

    public function saveMethodPembayaran()
    {
      $this->form_validation->set_rules('nomor', 'Nomor Rekening', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('nama', 'Nama Rekening', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kacab', 'Kantor Cabang', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $pesan = "Gagal Ditambahkan";
        $method = "Metode Pembayaran";
        $tema = "error";
        $this->get_flashdata($pesan, $method, $tema);
      } else {
        $this->M_Admin->saveMethodPembayaran();
      }
      redirect(base_url('Admin/methodPembayaran'));
    }

    public function updateMethodPembayaran($id_rekening)
    {$this->form_validation->set_rules('nomor', 'Nomor Rekening', 'trim|required|integer', array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('nama', 'Nama Rekening', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('kacab', 'Kantor Cabang', 'trim|required', array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $pesan = "Gagal Mengubah";
        $method = "Metode Pembayaran";
        $tema = "error";
        $this->get_flashdata($pesan, $method, $tema);
      } else {
        $this->M_Admin->updateMethodPembayaran($id_rekening);
      }
      redirect(base_url('Admin/methodPembayaran'));
    }


    public function saveadmin()
    {
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('waktu', 'Waktu Pengerjaan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Admin'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_admin' => $this->input->post('nama', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'waktu' => $this->input->post('waktu', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE)
        ];
        $this->M_Admin->saveAdmin($data);
      }
    }

    public function updateAdmin($id)
    {
      $this->form_validation->set_rules('kemampuan', 'Kemampuan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('waktu', 'Waktu Pengerjaan', 'trim|required|integer', 
        array('required' => '%s harus dipilih', 'integer' => '%s harus berupa angka'));
      $this->form_validation->set_rules('kategori', 'Kategori Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('deskripsi', 'Deskripsi Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama', 'Nama Admin', 'trim|required', 
        array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', 
        array('required' => '%s harus diisi'));

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat diubah');
        redirect(base_url('Admin'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $data= [ 
          'nama_admin' => $this->input->post('nama', TRUE),
          'waktu' => $this->input->post('waktu', TRUE),
          'satuan' => $this->input->post('satuan', TRUE),
          'kemampuan' => $this->input->post('kemampuan', TRUE),
          'detail' => $this->input->post('deskripsi', TRUE),
          'id_kategori' => $this->input->post('kategori', TRUE)
        ];
        $this->M_Admin->updateAdmin($data, $id);
      }
    }

    public function nonaktifkanmetode_pembayaran($id)
    {
      $this->M_Admin->nonaktifkanmetodepembayaran($id);
      redirect('Admin/methodPembayaran');
    }

    private function get_flashdata($pesan, $jasa, $tema)    
    {
      $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
    }

  }