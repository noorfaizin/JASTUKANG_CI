<?php

class M_Jasa extends CI_Model{

  public function getAllJasa()
  {
    $this->db->from('jasa');
    $this->db->join('jasa_kategori', 'jasa.id_kategori = jasa_kategori.id_kategori_jasa');
    return $this->db->get()->result();
  }

  public function getJasaById($id_jasa)
  {
    $this->db->where('id_jasa', $id_jasa);
    $this->db->from('jasa');
    $this->db->join('jasa_kategori', 'jasa.id_kategori = jasa_kategori.id_kategori_jasa');
    return $this->db->get()->result();
  }
  
  public function getKategori()
  {
    return $this->db->get('jasa_kategori')->result();
  }

  public function saveJasa($data)
  {
    $this->db->insert('jasa', $data);
  }
  
  public function updateJasa($data, $id)
  {
    $this->db->where('id_jasa', $id);
    $this->db->update('jasa', $data);
  }

  private function _saveImage($data = array())
  {
    $this->db->insert_batch('material_gambar',$data); 
  }

  public function deleteJasa($id)
  {
    $this->db->where('id_jasa', $id);
    $this->db->delete('jasa');
  }
}