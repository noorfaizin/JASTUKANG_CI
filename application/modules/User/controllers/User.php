<?php

class User extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_User');
      $this->load->library(array('form_validation')); 
    }

    public function pelanggan()
    {
      $data['judul'] = "Daftar Pelanggan";
      $data['pelanggan'] = $this->M_User->getPelanggan();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index_pelanggan', $data);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function tukang()
    {
      $data['judul'] = "Daftar Pekerja";
      $data['tukang'] = $this->M_User->getTukang();
      $this->load->view('Dashboard/Template_backend/header', $data);
      $this->load->view('Dashboard/Template_backend/sidebar');
      $this->load->view('Dashboard/Template_backend/topbar');
      $this->load->view('index_tukang', $data);
      $this->load->view('Dashboard/Template_backend/footer');
    }

    public function nonaktifkanPengguna($id)
    {
      $this->M_User->nonaktifkanPengguna($id);
      $this->session->set_flashdata('sukses','Pengguna berhasil dinonaktifkan');
      redirect('User/pelanggan');
    }

    public function login()
    {
      $data['judul'] = "Login jasTukang";
      $this->load->view('login', $data);
    }

    public function register()
    {
      $data['judul'] = "Daftar jasTukang";
      $this->load->view('register', $data);
    }

    public function registerUser()
    {
      $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'trim|required', array('required' => '%s harus diisi'));
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules('verpassword', 'Password Confirmation', 'trim|required|matches[password]');
      $this->form_validation->set_rules(
        'email', 'Email', 
        'trim|required|valid_email|is_unique[user_detail.email]', 
        array(
          'required' => '%s harus diisi', 
          'is_unique' => 'This %s sudah terdaftar.'
        )
      );
      $this->form_validation->set_rules(
        'no_hp', 'Nomor Telepon', 
        'trim|required|integer|min_length[11]|max_length[14]', 
        array(
          'required' => '%s harus dipilih', 
          'integer' => '%s harus berupa angka'
        )
      );

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('User/register'));
      } else {
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
        $account= [ 
          'role_id' => '1',
          'status' => '1',
          'email' => $this->input->post('email', TRUE),
          'password' => password_hash($this->input->post('password', TRUE), PASSWORD_BCRYPT)
        ];
        $this->M_User->saveUser($account);
        redirect(base_url('User/login'));
      }
    }

    public function saveLogin()
    {
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
      $this->form_validation->set_rules(
        'email', 'Email', 
        'trim|required|valid_email', 
        array(
          'required' => '%s harus diisi', 
          'is_unique' => 'This %s sudah terdaftar.'
        )
      );

      if ($this->form_validation->run() == false) {
        $this->session->set_flashdata('sukses','Data tidak dapat dimasukkan');
        redirect(base_url('User/login'));
      } else {
        $email = $this->input->post('email', TRUE); 
        $password = $this->input->post('password', TRUE); 
        $this->simple_login->login($email,$password,base_url('dashboard'), base_url('login')); 
      }
    }

    public function logout()
    {
      $this->simple_login->logout();
    }
}