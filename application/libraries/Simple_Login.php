<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
    
class Simple_Login {

    // SET SUPER GLOBAL 
    var $CI = NULL; 

    /**
    * Class constructor
    *
    * @return   void
    */

    public function __construct() 
    {
        $this->CI =& get_instance(); 
    }

    public function login($email, $password) 
    {
        $query = $this->CI->db->get_where(
            'user_account',
            array(
                'email'=>$email,
                'status' => '1',
                'password' => password_verify($password, PASSWORD_BCRYPT)
            )
        );
        if($query->num_rows() == 1) {
            //ambil data user berdasar username
            $user = $query->row(); 
            $id_user = $user->id_user;
            $id_role = $user->role_id;

            $this->CI->session->set_userdata('id_user',$id_user);
            $this->CI->session->set_userdata('id_role',$id_role);
            
            redirect('');    
        }else{
            //jika tidak ada, set notifikasi dalam flashdata. 
            $this->CI->session->set_flashdata('sukses','Email atau password anda salah, silakan coba lagi.. ');
            //redirect ke halaman login
            redirect(site_url('User/login'));    
        } 
        return false;
    }

    /**
    * Hapus session, lalu set notifikasi kemudian di alihkan * ke halaman login
    */
    public function logout() {
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('id_role');
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(site_url(''));    
    } 


    /**
    * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
    * login
    */
    public function cek_login() {
        //cek session username 
        if($this->CI->session->userdata('id_user') == '') {
            //set notifikasi 
            $this->CI->session->set_flashdata('sukses','Anda belum login');
            //alihkan ke halaman login
            redirect(site_url('User/login'));    
        }  
    }

    public function cek_admin() {
        //cek session username 
        if($this->CI->session->userdata('id_role') != '0') {
            //set notifikasi 
            $this->CI->session->set_flashdata('sukses','Anda tidak dapat mengakses halaman ini');
            //alihkan ke halaman login
            redirect(site_url(''));    
        }  
    }
}
?>