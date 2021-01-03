<?php

  /**
   *
   */
   if (!defined('BASEPATH')) exit('No direct script access
allowed');
  class M_jasa extends CI_Model
  {

<<<<<<< HEAD
    public function getKatJasa($table)
=======
    public function getAll($table)
>>>>>>> 308f91a2e99a74f0e3f927ef2f693be41daf5f52
    {
      // return $this->db->query('select kategori.nama_kategori as kategori,
      //                           json_objectagg(sub.id_sub_kategori_jasa,
      //                           sub.nama_sub_kategori_jasa) as
      //                           sub_kategori from jasa_kategori as kategori inner
      //                           join jasa_sub_kategori as sub on
      //                           kategori.id_kategori_jasa = sub.id_kategori_jasa
      //                           group by kategori.id_kategori_jasa');

      $query = $this->db->get($table)->result_array();
      foreach ($query as $kat=>$kategori) {
        $this->db->where('id_kategori_jasa', $kategori['id_kategori_jasa']);
        $sub = $this->db->get('jasa_sub_kategori')->result_array();
        $query[$kat]['jasa_sub_kategori'] = $sub;
      }
      return $query;
    }
  }


?>
