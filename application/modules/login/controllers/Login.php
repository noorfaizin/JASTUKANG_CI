<?php

  /**
   *
   */
  class Login extends MY_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('m_login');
      $this->load->model('template');
      $this->load->library(array('form_validation'));
      $this->load->helper(array('url','form'));
    }

    public function index()
    {
      if ($this->session->userdata('user')) {
        redirect('user');
      }else if ($this->session->userdata('tukang')){
        redirect('tukang');
      }
      $data['judul'] = 'Login User';
      $this->template->header($data['judul']);
      $this->load->view('login');
    }

    public function login_tukang()
    {
      if($this->session->userdata('tukang')){
        redirect('tukang');
      }else if($this->session->userdata('user')){
        redirect('user');
      }
      $data['judul'] = 'Login Tukang';
      $this->template->header($data['judul']);
      $this->load->view('login_tukang');
    }

    public function do_login()
    {
      $role = $this->input->post('role');
      $username = $this->form_validation->set_rules('username', 'USERNAME', 'required');
      $password = $this->form_validation->set_rules('password', 'PASSWORD', 'required');

      // ROLE USER
      if ($role == 'user') {
        if ($this->form_validation->run() == FALSE) {
          $data['judul'] = 'Login User';
          $this->template->header($data['judul']);
          $this->load->view('login');
          // die('salah input');
        }else{
          $username = $this->input->post('username');
          $password = md5($this->input->post('password'));

          $user = $this->m_login->get('user_account','email', $username);
          if (empty($user)) {
            $this->session->set_flashdata('msg','<small class="font-italic text-danger"> user tidak ditemukan </small>'); // Buat session flashdata
        			redirect('login'); // Redirect ke halaman login
          }else{
            if ($password == $user->password) {
              $detail = $this->m_login->getDetail('user_detail', 'id_user', $username);
              $session = array(
                'user'=>true,
                'id_user'=>$detail->id_user,
                'email'=>$username,
                'nama_user'=>$detail->nama_user,
                'alamat_user'=>$detail->alamat_user,
                'no_hp'=>$detail->no_hp,
                'lokasi'=>$detail->id_lokasi_kecamatan,
                'foto'=>$detail->foto
              );
              $this->session->set_userdata($session);
              redirect('user');
            }else{
              $this->session->set_flashdata('msg', '<small class="font-italic text-danger"> user tidak ditemukan </small>');
              redirect('login');
            }
          }
        }
      }else if ($role == 'tukang') { //ROLE TUKANG
        if ($this->form_validation->run() == FALSE) {
          $data['judul'] = 'Login Tukang';
          $this->template->header($data['judul']);
          $this->load->view('login_tukang');
          // die('salah input');
        }else{
          $username = $this->input->post('username');
          $password = md5($this->input->post('password'));

          $user = $this->m_login->get('tukang_account','no_tlp', $username);
          if (empty($user)) {
            $this->session->set_flashdata('msg','<small class="font-italic text-danger"> user tidak ditemukan </small>'); // Buat session flashdata
        			redirect('login'); // Redirect ke halaman login
          }else{
            if ($password == $user->password) {
              $detail = $this->m_login->getDetail('tukang_detail','id_tukang',$user->id_tukang);
              $session = array(
                'tukang'=>true,
                'id_tukang' => $detail->id_tukang,
                'email'=>$user->email,
                'lokasi' => $detail->id_lokasi_kecamatan,
                'nama_tukang' => $detail->nama_tukang,
                'alamat_tukang' => $detail->alamat_tukang,
                'foto_ktp' => $detail->foto_ktp,
                'foto_wajah' => $detail->foto_wajah,
                'no_hp'=>$username
              );
              $this->session->set_userdata($session);
              // die(print_r($session));
              redirect('tukang');
            }else{
              $this->session->set_flashdata('msg', '<small class="font-italic text-danger"> user tidak ditemukan </small>');
              redirect('login/login_tukang');
            }
          }
        }
      }
    }
  }


?>
