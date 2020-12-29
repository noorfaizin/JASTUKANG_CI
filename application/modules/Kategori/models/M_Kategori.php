<?php

class M_Kategori extends CI_Model{

  public function getJasaKategori()
  {
    return $this->db->get('jasa_kategori')->result();
  }

  public function getMaterialKategori()
  {
    $this->db->select('material_kategori.nama_kategori as nama_kategori, jasa_kategori.id_kategori_jasa, id_kategori_material, jasa_kategori.nama_kategori as nama_jasa');
    $this->db->from('material_kategori');
    $this->db->join('jasa_kategori', 'jasa_kategori.id_kategori_jasa = material_kategori.id_kategori_jasa');
    return $this->db->get()->result();
  }

  public function saveKategoriJasa($data)
  {
    $this->db->insert('jasa_kategori', $data);
  }

  public function updateKategoriJasa($data, $id)
  {
    $this->db->where('id_kategori_jasa', $id);
    $this->db->update('jasa_kategori', $data);
  }

  public function hapusKategoriJasa($id)
  {
    $this->db->where('id_kategori_jasa', $id);
    $this->db->delete('jasa_kategori');
  }

  public function hapusKategoriMaterial($id)
  {
    $this->db->where('id_kategori_material', $id);
    $this->db->delete('material_kategori');
  }

  public function saveKategoriMaterial($data)
  {
    $this->db->insert('material_kategori', $data);
  }

  public function updateKategoriMaterial($data, $id)
  {
    $this->db->where('id_kategori_material', $id);
    $this->db->update('material_kategori', $data);
  }

}