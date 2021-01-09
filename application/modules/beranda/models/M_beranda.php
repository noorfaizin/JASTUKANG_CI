<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class M_beranda extends CI_Model{
    public function getKat(){
      $query = $this->db->get('jasa_kategori')->result();
      return $query;
    }

    public function getSubKat($where){
      $query = $this->db->get_where('jasa_sub_kategori', array('id_kategori_jasa' => $where));
      return $query;
    }
  }
