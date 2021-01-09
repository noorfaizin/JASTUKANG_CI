<?php

  /**
   *
   */
  class Template extends CI_Model
  {

    public function Header($judul)
    {
      $data['judul'] = $judul;
      return $this->load->view('template_frontend/header',$data);
    }

    public function Navbar()
    {
      $query = $this->db->get('jasa_kategori')->result_array();
      foreach ($query as $kat=>$kategori) {
        $this->db->where('id_kategori_jasa', $kategori['id_kategori_jasa']);
        $sub = $this->db->get('jasa_sub_kategori')->result_array();
        $query[$kat]['jasa_sub_kategori'] = $sub;
      }
      $data['jasa'] = $query;
      //die(print_r($data));
      return $this->load->view('template_frontend/navbar',$data);
    }

    public function footer()
    {
      return $this->load->view('template_frontend/footer');
    }
  }