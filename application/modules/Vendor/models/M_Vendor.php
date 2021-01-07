<?php

class M_Vendor extends CI_Model{

  public function getVendor()
  {
    $this->db->from('vendor');
    $this->db->join('lokasi_kelurahan', ('vendor.id_lokasi = lokasi_kelurahan.id_kelurahan'));
    $this->db->join('lokasi_kecamatan', ('lokasi_kecamatan.id_kecamatan = lokasi_kelurahan.id_kecamatan'));
    return $this->db->get()->result();
  }

  public function getVendorBy($id)
  {
    $this->db->where('id_vendor ='. $id);
    $this->db->from('vendor');
    $this->db->join('lokasi_kelurahan', ('lokasi_kelurahan.id_kelurahan = vendor.id_lokasi'));
    $this->db->join('lokasi_kecamatan', ('lokasi_kecamatan.id_kecamatan = lokasi_kelurahan.id_kecamatan'));
		$query = $this->db->get();
		return $query;
  }

  public function getKemacatan()
  {
    return $this->db->get('lokasi_kecamatan')->result();
  }

  function getKelurahan($id){
    // get Kecamatan from ID Lokasi
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->get('lokasi_kelurahan');
    return $query;
  }

  public function saveVendor($data)
  {
    $this->db->insert('vendor', $data);
  }

  public function updateVendor($data, $id_vendor)
  {
    $this->db->where('id_vendor', $id_vendor);
    $this->db->update('vendor', $data);
  }

  public function deleteVendor($id_vendor)
  {
    $this->db->where('id_vendor', $id_vendor);
    $this->db->delete('vendor');
  }
}