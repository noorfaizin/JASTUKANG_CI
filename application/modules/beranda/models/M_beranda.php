<?php

  /**
   *
   */
  class M_beranda extends CI_Model
  {
    public function getKat($table){
      $query = $this->db->get($table);
      return $query;
    }

    public function getSubKat($where)
    {
      $query = $this->db->get_where('jasa_sub_kategori', array('id_kategori_jasa' => $where));
      return $query;
    }
  }



?>
