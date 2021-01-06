<?php

class M_Beranda extends CI_Model{

  public function getProductBy($id_material)
  {
    $this->db->where('material.id_material', $id_material);
    $this->db->from('material');
    $this->db->join('material_gambar', 'material_gambar.id_material = material.id_material');
    $this->db->group_by('material.id_material');
    return $this->db->get()->result();
  }

  public function addToCart($id_material, $qty)
  {
    $id_user = $this->session->userdata('id_user');

    $this->db->where('id_user', $id_user);
    $this->db->where('id_material', $id_material);
    $getAllCart = $this->db->get('cart')->result_array();
    
    if ($getAllCart) {
      $qtyOld = $getAllCart[0]['qty'];
      $qtyNew = $qty + $qtyOld;
      $data = [
        'qty' => $qtyNew
      ];
      $this->db->where('id_user', $id_user);
      $this->db->where('id_material', $id_material);
      $this->db->update('cart', $data);
    } else {
      $data = [
        'id_user' => $id_user,
        'id_material' => $id_material,
        'qty' => $qty
      ];
      $this->db->insert('cart', $data);
    }
  }

  public function co()
  {
    $this->load->helper('date');
    $id_user = $this->session->userdata('id_user');

    $this->db->select_max('id_tr_material');
    $query = $this->db->get('transaksi_material')->result_array();
    $no_transaksi =  substr($query['0']['id_tr_material'], 3,4);
    $no_transaksi++;
    $getNumber = strlen((string)$no_transaksi);
    if ($getNumber == 1 || $getNumber == 2) {
      $final = str_pad("$no_transaksi",2, '0', STR_PAD_LEFT);
      $id_transaksi = "TRM_". $final;
    } else {
      $id_transaksi ="TRM_001";
    }
    $format = "%Y-%m-%d %h:%i:%s ";
    $query = $this->db->query('select sum(harga_material * qty) as total_bayar from cart, material where cart.id_material = material.id_material and id_user = '. $id_user)->result_array();
    $total_bayar = $query['0']['total_bayar'];
    
    $data = [
      'id_tr_material' => $id_transaksi,
      'id_user' => $id_user,
      'status' => '0',
      'tgl_pemesanan' => mdate($format),
      'nama_penerima' => $this->input->post('nama', TRUE),
      'hp_penerima' => $this->input->post('nomor', TRUE),
      'alamat_penerima' => $this->input->post('alamat', TRUE),
      'total_harga' => $total_bayar,
      'kecamatan' => $this->input->post('kecamatan', TRUE)
    ];

    if ($this->db->insert('transaksi_material', $data)) {
      $addPembayaran = [
        'id_user' => $id_user,
        'id_rekening' => $this->input->post('metode_pembayaran'),
        'id_transaksi' => $id_transaksi,
        'total_harga' => $total_bayar
      ];
  
      $this->db->insert('pembayaran', $addPembayaran);

      $this->db->from('cart');
      $this->db->join('material', 'cart.id_material = material.id_material');
      $query = $this->db->get('')->result();
      foreach ($query as $qr) {
        $addToTR =[
          'id_tr_material' => $id_transaksi,
          'id_material' => $qr->id_material,
          'nama_material' => $qr->nama_material,
          'harga_material' => $qr->harga_material,
          'quantity' => $qr->qty
        ];
        $this->db->insert('material_transaksi_detail', $addToTR);
        $this->db->where('id_material', $qr->id_material);
        $this->db->delete('cart');
        }

      }    
  }

  public function getAllCart($id_user)
  {
    $this->db->where('cart.id_user', $id_user);
    $this->db->from('cart');
    $this->db->join('material', 'material.id_material = cart.id_material');
    $this->db->join('material_gambar', 'material_gambar.id_material = material.id_material');
    $this->db->group_by('material.id_material'); 
    return $this->db->get()->result();
  }

  public function getMetodePembayaran()
  {
    return $this->db->get('metode_pembayaran')->result();
  }

  public function getKecamatan()
  {
    return $this->db->get('lokasi_kecamatan')->result();
  }

}