<?php

class M_Transaksi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('date');
    $this->tgl = "%Y-%m-%d %h:%i:%s ";
  }

  public function getAllTransaksiMaterial()
  {
    $this->db->from('transaksi_material');
    $this->db->join('pembayaran', 'pembayaran.id_transaksi = transaksi_material.id_tr_material');
    $this->db->join('metode_pembayaran', 'metode_pembayaran.id_rekening = pembayaran.id_rekening');
    return $this->db->get()->result();
  }

  public function getProduk($id_transaksi)
  {
      $this->db->where('mtd.id_tr_material', $id_transaksi);
      $this->db->from('material_transaksi_detail mtd');
      $this->db->join('material_gambar mg', 'mtd.id_material = mg.id_material');
      $this->db->join('material m', 'mtd.id_material = m.id_material');
      $this->db->group_by('m.id_material');
      $this->db->order_by('m.id_material');
      return $this->db->get()->result();
  }

  public function getUlasan($id_transaksi, $id_material)
  {
      $this->db->where('mu.id_transaksi_material', $id_transaksi);
      $this->db->where('mu.id_material', $id_material);
      $this->db->from('material_ulasan mu');
      $this->db->order_by('mu.id_material');
      return $this->db->get()->result();
  }

  public function saveUlasan($id_transaksi, $id_material)
  {
    $data = [
      'id_material' => $id_material,
      'id_transaksi_material' => $id_transaksi,
      'id_user' => $this->session->userdata('id_user'),
      'nilai' => $this->input->post('nilai'),
      'keterangan' => $this->input->post('ulasan')
    ];
    $this->db->insert('material_ulasan', $data);
    redirect('transaksi/ulasanProduk/' . $id_transaksi);
  }

  public function addSaldo($transaksi, $id_transaksi)
  {
    if ($transaksi == 1) {
      $this->db->select('total_harga, id_pembayaran');
      $this->db->where('id_transaksi', $id_transaksi);
      $query = $this->db->get('pembayaran')->result_array();

      $data = [
        'masuk' => $query['0']['total_harga'],
        'datetime' => mdate($this->tgl),
        'id_pembayaran' => $query['0']['id_pembayaran'],
        'id_transaksi' => $id_transaksi
      ];
    }
    $this->db->insert('saldo', $data);
  }

  public function konfirmasiPengiriman($id_transaksi, $pesan)
  {
    if ($pesan==1) {
      $this->db->set('status', '3');
    } else if ($pesan==2) {
      $this->db->set('status', '4');
    } else if ($pesan==3) {
      $this->db->set('status', '5');
    }
    
    $this->db->where('id_tr_material', $id_transaksi);

    if ($this->db->update('transaksi_material')) {
      $pesan = "Berhasil Terkonfirmasi";
      $jasa = "Transaksi Material";
      $tema = "success";
    } else {
      $pesan = "Gagal Terkonfirmasi";
      $jasa = "Transaksi Material";
      $tema = "error";
    }
    
    $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
  }

  public function saveBuktiTransaksi()
  {
    $id_transaksi = $this->input->post('id_transaksi');

    $_FILES['buktiTF']['name']     = $_FILES['files']['name']; 
    $_FILES['buktiTF']['type']     = $_FILES['files']['type']; 
    $_FILES['buktiTF']['tmp_name'] = $_FILES['files']['tmp_name']; 
    $_FILES['buktiTF']['error']    = $_FILES['files']['error']; 
    $_FILES['buktiTF']['size']     = $_FILES['files']['size']; 

    $buktiPatch    = 'assets/images/transaksi/'; 

    $config['upload_path'] = $buktiPatch; 
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $config['overwrite'] = TRUE;
    $config['file_name'] = $id_transaksi;

    $this->load->library('upload', $config); 
    $this->upload->initialize($config); 

    $format = "%Y-%m-%d %h:%i:%s ";

    if($this->upload->do_upload('buktiTF')){ 
        $fileData = $this->upload->data(); 
        $dataBukti = [
          'nama_pengirim' => $this->input->post('nama_pengirim'),
          'asal_bank' => $this->input->post('asal_bank'),
          'asal_rekening' => $this->input->post('asal_rekening'),
          'total_bayar' => $this->input->post('total_bayar'),
          'waktu' => mdate($format),
          'path' => $fileData['file_name']
        ];
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('pembayaran', $dataBukti);

        $this->db->set('status', '1');
        $this->db->where('id_tr_material', $id_transaksi);
        $this->db->update('transaksi_material');
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
    }
    redirect(base_url('Transaksi/getTransaksiMember'));
  }

  public function getTransaksiMaterialByMember()
  {
    $id_user = $this->session->userdata('id_user');
    $this->db->where('pembayaran.id_user', $id_user);
    $this->db->from('transaksi_material');
    $this->db->join('pembayaran', 'pembayaran.id_transaksi = transaksi_material.id_tr_material');
    $this->db->join('metode_pembayaran', 'metode_pembayaran.id_rekening = pembayaran.id_rekening');
    return $this->db->get()->result();
  }

  public function getPemesananMaterialBy($id_transaksi)
  {
    $this->db->select('material_transaksi_detail.nama_material, material_transaksi_detail.harga_material, material_transaksi_detail.quantity, vendor.nama_vendor, vendor.alamat_vendor, vendor.no_hp, transaksi_material.nama_penerima, transaksi_material.hp_penerima, transaksi_material.alamat_penerima, transaksi_material.kecamatan');
    $this->db->where('material_transaksi_detail.id_tr_material', $id_transaksi);
    $this->db->from('material_transaksi_detail');
    $this->db->join('transaksi_material', 'transaksi_material.id_tr_material = material_transaksi_detail.id_tr_material');
    $this->db->join('material', 'material.id_material = material_transaksi_detail.id_material');
    $this->db->join('vendor', 'vendor.id_vendor = material.id_vendor');    
    return $this->db->get()->result();
  }
  public function getPembayaranBy($id_transaksi)
  {
    $this->db->where('id_transaksi', $id_transaksi);
    $this->db->from('pembayaran');
    $this->db->join('metode_pembayaran', 'metode_pembayaran.id_rekening = pembayaran.id_rekening');
    return $this->db->get()->row();
  }

  public function getTransaksiById($id_transaksi)
  {
    $this->db->where('id_transaksi', $id_transaksi);
    $this->db->from('transaksi');
    $this->db->join('transaksi_kategori', 'transaksi.id_kategori = transaksi_kategori.id_kategori_transaksi');
    $this->db->join('vendor', 'vendor.id_vendor = transaksi.id_vendor');
    return $this->db->get()->result();
  }
  
  public function getKategori()
  {
    return $this->db->get('transaksi_kategori')->result();
  }

  public function getVendor()
  {
    $this->db->select('id_vendor, nama_vendor');
    return $this->db->get('vendor')->result();
  }

  public function saveTransaksi($data, $nama)
  {
    $errorUploadType = $statusMsg = ''; 
     
    $this->db->insert('transaksi', $data);
    $id_transaksi = $this->db->insert_id();
    $filesCount = count($_FILES['files']['name']);
    for($i = 0; $i < $filesCount; $i++){ 
      $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
      $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
      $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
      $_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
      $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
       
      $uploadPath = 'assets/images/transaksi/'; 
      $config['upload_path'] = $uploadPath; 
      $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
      $newName = $id_transaksi."_".$i."_".$nama;
      $config['file_name'] = $newName;
       
      $this->load->library('upload', $config); 
      $this->upload->initialize($config); 
       
      if($this->upload->do_upload('file')){ 
          $fileData = $this->upload->data(); 
          $uploadData[$i]['path'] = $fileData['file_name']; 
          $uploadData[$i]['id_transaksi'] = $id_transaksi; 
      }else{  
          $errorUploadType = $this->upload->display_errors();  
      } 
    } 

    $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 

    if(!empty($uploadData)){ 
      $insert = $this->_saveImage($uploadData); 
      echo '<script language="javascript">alert("Data berhasil dimasukkan")</script>';
    } else {  
      echo '<script>alert("'.$errorUploadType.'")</script>';
    }
    redirect(base_url('Transaksi'));
  }
  
  public function updateTransaksi($data, $nama, $id_transaksi)
  {
    $errorUploadType = $statusMsg = ''; 
    if ($_FILES['files']['size'] == 0) {
      $this->db->where('id_transaksi', $id_transaksi);
      $this->db->update('transaksi', $data);
      redirect(base_url('Transaksi'));
    } else {
      $filesCount = count($_FILES['files']['name']);
      for($i = 0; $i < $filesCount; $i++){ 
        $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
        $_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
         
        $uploadPath = 'assets/images/transaksi/'; 
        $config['upload_path'] = $uploadPath; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $newName = $id_transaksi."_".$i."_".$nama;
        $config['file_name'] = $newName;
         
        $this->load->library('upload', $config); 
        $this->upload->initialize($config); 
         
        if($this->upload->do_upload('file')){ 
          $this->db->select('path');
          $this->db->where('id_transaksi', $id_transaksi);
          $gambar = $this->db->get('transaksi_gambar')->result(); 
          foreach ($gambar as $gb) {
            unlink("assets/images/transaksi/".$gb->path);
          }
          $this->db->where('id_transaksi', $id_transaksi);
          $this->db->delete('transaksi_gambar');

          $fileData = $this->upload->data(); 
          $uploadData[$i]['path'] = $fileData['file_name']; 
          $uploadData[$i]['id_transaksi'] = $id_transaksi; 
        }else{  
          $errorUploadType = $this->upload->display_errors();  
        } 
      } 
  
      $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
      if(!empty($uploadData)){ 
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
        $insert = $this->_saveImage($uploadData); 
      } else {  
        echo "Sorry, there was an error uploading your file.". $errorUploadType;
      }
    }
  }

  private function _saveImage($data = array())
  {
    $this->db->insert_batch('transaksi_gambar',$data); 
  }

  public function deleteTransaksi($id)
  {
    $this->db->select('path');
    $this->db->where('id_transaksi', $id);
    $gambar = $this->db->get('transaksi_gambar')->result(); 
    foreach ($gambar as $gb) {
      unlink("assets/images/transaksi/".$gb->path);
    }

    $tables = array('transaksi', 'transaksi_gambar');
    $this->db->where('id_transaksi', $id);
    $this->db->delete($tables);
  }

  private function get_flashdata($pesan, $jasa, $tema)    
  {
    $this->session->set_flashdata('success', "<script type='text/javascript'>get_sweetalert('$pesan ','$jasa','$tema');</script>");
  }
}