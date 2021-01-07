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

  public function getKategori()
  {
    return $this->db->get('jasa')->result();
  }
  public function getKemacatan()
  {
    return $this->db->get('lokasi_kecamatan')->result();
  }

  public function getJasa()
  {
    return $this->db->get('jasa')->result();
  }

  public function saveTukang()
  {
    $this->db->select_max('id_tukang');
    $query = $this->db->get('tukang_detail')->result_array();
    $no_tukang =  substr($query['0']['id_tukang'], 3,4);
    $no_tukang++;
    $getNumber = strlen((string)$no_tukang);
    if ($getNumber == 1 || $getNumber == 2) {
      $final = str_pad("$no_tukang",3, '0', STR_PAD_LEFT);
      $id_tukang = "TK_". $final;
    } 

    $tukang_account = [
      'id_tukang' => $id_tukang,
      'email' => $this->input->post('email'),
      'hp_tukang' => $this->input->post('hp'),
      'password' => password_hash($this->input->post('tgl_lahir'), PASSWORD_BCRYPT),
      'aktif' => "1"
    ];
    $this->db->insert('tukang_account', $tukang_account);

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
  
  public function updateTukang($id_tukang)
  {
    $tukang_account = [
      'email' => $this->input->post('email'),
      'hp_tukang' => $this->input->post('hp')
    ];
    $this->db->where('id_user', $id_tukang);
    $this->db->update('user_account', $tukang_account);

    $data= [ 
      'id_lokasi' => $this->input->post('kelurahanEdit', TRUE),
      'nama_tukang' => $this->input->post('nama', TRUE),
      'alamat_tukang' => $this->input->post('alamat', TRUE),
      'hp_tukang' => $this->input->post('hp', TRUE),
      'spesialisasi' => $this->input->post('jasa', TRUE),
      'tgl_lahir' => $this->input->post('tgl_lahir', TRUE)
    ];
    $this->db->where('id_tukang', $id_tukang);
    $this->db->update('tukang_detail', $data);
    
    $_FILES['profil_picture']['name']     = $_FILES['files']['name']; 
    $_FILES['profil_picture']['type']     = $_FILES['files']['type']; 
    $_FILES['profil_picture']['tmp_name'] = $_FILES['files']['tmp_name']; 
    $_FILES['profil_picture']['error']    = $_FILES['files']['error']; 
    $_FILES['profil_picture']['size']     = $_FILES['files']['size']; 
      
    if(!empty($_FILES['files']['name'])){
      $getTglLahir = $this->input->post('tgl_lahir');
  
      $ktpPath    = 'assets/images/tukang/identitas/'; 
      $profilPath = 'assets/images/tukang/profil/'; 
      $tgl_lahir = substr($getTglLahir, 0, 4);
      
      $profilName = $id_tukang ."_". $tgl_lahir;
  
      $configProfil['upload_path'] = $profilPath; 
      $configProfil['allowed_types'] = 'jpg|jpeg|png|gif'; 
      $configProfil['file_name'] = $profilName;
      $configProfil['overwrite'] = TRUE;
              
      $this->load->library('upload', $configProfil); 
      $this->upload->initialize($configProfil); 
      if ($this->upload->do_upload('profil_picture')) {
        $dataProfilPicture = $this->upload->data();
        $dataGambar = [
          'gambar' => $dataProfilPicture['file_name']
        ];          

        $this->db->select('gambar');
        $this->db->where('id_tukang', $id_tukang);
        $gambar = $this->db->get('tukang_detail')->result(); 
        foreach ($gambar as $gb) {
          unlink("assets/images/tukang/profil/".$gb->gambar);
        }

        $this->db->where('id_tukang', $id_tukang);
        $this->db->update('tukang_detail', $dataGambar);
        $this->session->set_flashdata('sukses','Data berhasil dimasukkan');
      } 
    }
    redirect(base_url('Tukang'));
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

    $tables = array('tukang_detail', 'tukang_account');
    $this->db->where('id_tukang', $id);
    $this->db->delete($tables);
  }
}