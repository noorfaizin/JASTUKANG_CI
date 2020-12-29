<?php

class M_Tukang extends CI_Model{

  public function getAllTukang()
  {
    $this->db->from('tukang_detail');
    $this->db->join('jasa', ('jasa.id_jasa = tukang_detail.spesialisasi'));
    $this->db->join('lokasi_kelurahan', ('lokasi_kelurahan.id_kelurahan = tukang_detail.id_lokasi'));
    $this->db->join('lokasi_kecamatan', ('lokasi_kecamatan.id_kecamatan = lokasi_kelurahan.id_kecamatan'));
    return $this->db->get()->result();
  }

  public function getTukangById($id_tukang)
  {
    $this->db->where('id_tukang', $id_tukang);
    $this->db->from('tukang_detail');
    $this->db->join('jasa', ('jasa.id_jasa = tukang_detail.spesialisasi'));
    $this->db->join('lokasi_kelurahan', ('lokasi_kelurahan.id_kelurahan = tukang_detail.id_lokasi'));
    $this->db->join('lokasi_kecamatan', ('lokasi_kecamatan.id_kecamatan = lokasi_kelurahan.id_kecamatan'));
		$query = $this->db->get();
		return $query;
  }

  function getKelurahan($id){
    // get Kecamatan from ID Lokasi
    $this->db->where('id_kecamatan', $id);
    $query = $this->db->get('lokasi_kelurahan');
    return $query;
  }

  public function getKemacatan()
  {
    return $this->db->get('lokasi_kecamatan')->result();
  }

  public function getJasa()
  {
    return $this->db->get('jasa')->result();
  }

  
  // public function getKategori()
  // {
  //   return $this->db->get('material_kategori')->result();
  // }

  // public function getVendor()
  // {
  //   $this->db->select('id_vendor, nama_vendor');
  //   return $this->db->get('vendor')->result();
  // }

  public function saveTukang()
  {
    $tukang_account = [
      'email' => $this->input->post('hp'),
      'password' => password_hash($this->input->post('tgl_lahir'), PASSWORD_BCRYPT),
      'role_id' => "3",
      'status' => "1"
    ];
    $this->db->insert('user_account', $tukang_account);
    $id_tukang = $this->db->insert_id();

    $data= [ 
      'id_tukang' => $id_tukang,
      'id_lokasi' => $this->input->post('kelurahan', TRUE),
      'nama_tukang' => $this->input->post('nama', TRUE),
      'alamat_tukang' => $this->input->post('alamat', TRUE),
      'hp_tukang' => $this->input->post('hp', TRUE),
      'spesialisasi' => $this->input->post('jasa', TRUE),
      'no_identitas' => $this->input->post('no_identitas', TRUE),
      'tgl_lahir' => $this->input->post('tgl_lahir', TRUE)
    ];
    $this->db->insert('tukang_detail', $data);


    $_FILES['ktp']['name']     = $_FILES['file_ktp']['name']; 
    $_FILES['ktp']['type']     = $_FILES['file_ktp']['type']; 
    $_FILES['ktp']['tmp_name'] = $_FILES['file_ktp']['tmp_name']; 
    $_FILES['ktp']['error']    = $_FILES['file_ktp']['error']; 
    $_FILES['ktp']['size']     = $_FILES['file_ktp']['size']; 
    
    $_FILES['profil_picture']['name']     = $_FILES['files']['name']; 
    $_FILES['profil_picture']['type']     = $_FILES['files']['type']; 
    $_FILES['profil_picture']['tmp_name'] = $_FILES['files']['tmp_name']; 
    $_FILES['profil_picture']['error']    = $_FILES['files']['error']; 
    $_FILES['profil_picture']['size']     = $_FILES['files']['size']; 
      
    $getNoIdentitas = $this->input->post('no_identitas');
    $getTglLahir = $this->input->post('tgl_lahir');

    $ktpPath    = 'assets/images/tukang/identitas/'; 
    $profilPath = 'assets/images/tukang/profil/'; 
    $no_ktp = substr($getNoIdentitas, 0, 4);
    $tgl_lahir = substr($getTglLahir, 0, 4);
    
    $ktpName = $no_ktp ."_". $id_tukang ."_". $tgl_lahir;
    $profilName = $id_tukang ."_". $tgl_lahir;

    $config['upload_path'] = $ktpPath; 
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $config['file_name'] = $ktpName;

    $configProfil['upload_path'] = $profilPath; 
    $configProfil['allowed_types'] = 'jpg|jpeg|png|gif'; 
    $configProfil['file_name'] = $profilName;
      
    $this->load->library('upload', $config); 
    $this->upload->initialize($config); 
      
    if($this->upload->do_upload('ktp')){ 
        $fileData = $this->upload->data(); 
        $this->load->library('upload', $configProfil); 
        $this->upload->initialize($configProfil); 
        if ($this->upload->do_upload('profil_picture')) {
          $dataProfilPicture = $this->upload->data();
          $dataGambar = [
            'bukti_identitas' => $fileData['file_name'],
            'gambar' => $dataProfilPicture['file_name']
          ];          
        } else {
          $dataProfilPicture = $this->upload->data();
          $dataGambar = [
            'bukti_identitas' => $fileData['file_name']
          ];
        }
        $this->db->where('id_tukang', $id_tukang);
        $this->db->update('tukang_detail', $dataGambar);
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
    }else{  
      $tables = array('tukang_detail', 'user_account');      
      $this->db->where('id_tukang', $id_tukang);
      $this->db->delete($tables);
      
      $errorUploadType = $this->upload->display_errors();  
      $this->session->set_flashdata('sukses',"Data tidak dapat dimasukkan $errorUploadType");
    } 

    redirect(base_url('Tukang'));
  }
  
  public function updateTukang($data, $nama, $id_material)
  {
    $errorUploadType = $statusMsg = ''; 
    if ($_FILES['files']['size'] == 0) {
      $this->db->where('id_material', $id_material);
      $this->db->update('material', $data);
      echo "asdas";
    } else {
      $filesCount = count($_FILES['files']['name']);
      for($i = 0; $i < $filesCount; $i++){ 
        $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
        $_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
         
        $uploadPath = 'assets/images/material/'; 
        $config['upload_path'] = $uploadPath; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $newName = $id_material."_".$i."_".$nama;
        $config['file_name'] = $newName;
         
        $this->load->library('upload', $config); 
        $this->upload->initialize($config); 
         
        if($this->upload->do_upload('file')){ 
          $this->db->select('path');
          $this->db->where('id_material', $id_material);
          $gambar = $this->db->get('material_gambar')->result(); 
          foreach ($gambar as $gb) {
            unlink("assets/images/material/".$gb->path);
          }
          $this->db->where('id_material', $id_material);
          $this->db->delete('material_gambar');

          $fileData = $this->upload->data(); 
          $uploadData[$i]['path'] = $fileData['file_name']; 
          $uploadData[$i]['id_material'] = $id_material; 
        }else{  
          $errorUploadType = $this->upload->display_errors();  
        } 
      } 
  
      $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
      if(!empty($uploadData)){ 
        $this->db->where('id_material', $id_material);
        $this->db->update('material', $data);
        $insert = $this->_saveImage($uploadData); 
      } else {  
        echo "Sorry, there was an error uploading your file.". $errorUploadType;
      }
    }
  }

  private function _saveImage($data = array())
  {
    $this->db->insert_batch('material_gambar',$data); 
  }

  public function deleteTukang($id)
  {
    $this->db->select('gambar, bukti_identitas');
    $this->db->where('id_tukang', $id);
    $gambar = $this->db->get('tukang_detail')->result(); 
    foreach ($gambar as $gb) {
      unlink("assets/images/tukang/profil/".$gb->gambar);
      unlink("assets/images/tukang/identitas/".$gb->bukti_identitas);
    }

    $this->db->where('id_tukang', $id);
    $this->db->delete('tukang_detail');
    $this->db->where('id_user', $id);
    $this->db->delete('user_account');
  }
}