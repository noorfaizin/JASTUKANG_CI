<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tukang extends MY_Controller {

				function __construct(){
	        parent::__construct();
	        $this->load->library(array('form_validation'));
	        $this->load->helper(array('url','form'));
					$this->load->model('m_tukang');
					$this->authenticated();
					if (!$this->session->userdata('tukang')) {
						show_404();
					}
				}

				public function index() {
                $data['judul'] = "Beranda Tukang";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('profile', $data);
                $this->load->view('template/footer', $data);
        }

				public function changepassword()
				{
		      $old_password = $this->form_validation->set_rules('old_password', 'OLD_PASSWORD', 'required|min_length[8]|max_length[15]');
		      $new_password = $this->form_validation->set_rules('new_password', 'NEW_PASSWORD', 'required|min_length[8]|max_length[15]');

					if ($this->form_validation->run() == FALSE) {
						$data['judul'] = "Beranda Tukang";
						$this->load->view('template/header', $data);
						$this->load->view('template/sidebar', $data);
						$this->load->view('template/topbar', $data);
						$this->load->view('profile', $data);
						$this->load->view('template/footer', $data);
					}else{
						$old_password = md5($this->input->post('old_password'));
						$new_password = md5($this->input->post('new_password'));
						$account = $this->m_tukang->get();
						if ($old_password == $account->password) {
							$new = array('password'=>$new_password);
							$this->m_tukang->updatePass($new);
							$this->session->set_flashdata('msg','<small class="font-italic text-danger"> Password Berhasil Diganti </small>');
							redirect('tukang');
						}else{
							$this->session->set_flashdata('msg','<small class="font-italic text-danger"> Password Gagal Diganti </small>');
							redirect('tukang');
						}
					}
				}

				public function address() {
                $data['judul'] = "Alamat";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('address', $data);
                $this->load->view('template/footer', $data);
        }

				public function jasa() {
                $data['judul'] = "Jasa Yang Dimiliki";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('jasa', $data);
                $this->load->view('template/footer', $data);
        }

				public function message() {
                $data['judul'] = "Pesan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('message', $data);
                $this->load->view('template/footer', $data);
        }

				public function pesanan() {
                $data['judul'] = "Pesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('pesanan', $data);
                $this->load->view('template/footer', $data);
        }

				public function historyjob() {
                $data['judul'] = "Riwayat Pesanan";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('historyjob', $data);
                $this->load->view('template/footer', $data);
        }

				public function saldo() {
                $data['judul'] = "Saldo Tukang";
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('saldo', $data);
                $this->load->view('template/footer', $data);
        }

}
