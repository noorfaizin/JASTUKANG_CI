<?php

  /**
   *
   */
   if (!defined('BASEPATH')) exit('No direct script access
allowed');
  class M_jasa extends CI_Model
  {

    public function getKatJasa($table)
    {
      $query = $this->db->get($table)->result_array();
      foreach ($query as $kat=>$kategori) {
        $this->db->where('id_kategori_jasa', $kategori['id_kategori_jasa']);
        $sub = $this->db->get('jasa_sub_kategori')->result_array();
        $query[$kat]['jasa_sub_kategori'] = $sub;
      }
      return $query;
    }

    public function getAllJasa()
    {
      $query = $this->db->get('jasa');
      return $query;
    }

    public function getJasa($where)
    {
      $this->db->select('jasa.*, sub.nama_sub_kategori_jasa as sub');
      $this->db->from('jasa');
      $this->db->join('jasa_sub_kategori as sub', 'sub.id_sub_kategori_jasa = jasa.id_subkategori');
      $query = $this->db->get();
      return $query;
    }

    public function getDetailJasa($where)
    {
      $this->db->select('jasa.*, kat.nama_kategori as kat, sub.nama_sub_kategori_jasa as sub');
      $this->db->from('jasa');
      $this->db->join('jasa_kategori as kat', 'kat.id_kategori_jasa = jasa.id_kategori');
      $this->db->join('jasa_sub_kategori as sub', 'sub.id_sub_kategori_jasa = jasa.id_subkategori');
      $query = $this->db->get();
      return $query;
    }

    public function getKecamatan()
    {
      $query = $this->db->get('lokasi_kecamatan');
      return $query;
    }

    public function getKelurahan($where)
    {
      $query = $this->db->get_where('lokasi_kelurahan', array('id_kecamatan'=>$where));
      return $query;
    }
  }


?>
