<?php

  class Template_user extends CI_Model{

    public function Header($judul){
      $data['judul'] = $judul;
      return $this->load->view('user/template/header',$data);
    }

    public function Sidebar(){
      $query = $this->db->get('jasa_kategori')->result_array();
      foreach ($query as $kat=>$kategori) {
        $this->db->where('id_kategori_jasa', $kategori['id_kategori_jasa']);
        $sub = $this->db->get('jasa_sub_kategori')->result_array();
        $query[$kat]['jasa_sub_kategori'] = $sub;
      }
      $data['jasa'] = $query;
      //die(print_r($data));
      return $this->load->view('user/template/sidebar',$data);
    }

    public function Topbar(){
      return $this->load->view('user/template/topbar');
    }

    public function Footer(){
      return $this->load->view('user/template/footer');
    }
  }