<?php

class M_Material extends CI_Model{

  public function getAllMaterial()
  {
    $this->db->from('material');
    $this->db->join('material_kategori', 'material.id_kategori = material_kategori.id_kategori_material');
    $this->db->join('material_gambar', 'material.id_material = material_gambar.id_material');
    $this->db->join('vendor', 'vendor.id_vendor = vendor.id_vendor');
    $this->db->group_by('material.id_material');
    return $this->db->get()->result();
  }

  public function getMaterialById($id_material)
  {
    $this->db->where('id_material', $id_material);
    $this->db->from('material');
    $this->db->join('material_kategori', 'material.id_kategori = material_kategori.id_kategori_material');
    $this->db->join('vendor', 'vendor.id_vendor = material.id_vendor');
    return $this->db->get()->result();
  }
  
  public function getKategori()
  {
    return $this->db->get('material_kategori')->result();
  }

  public function getVendor()
  {
    $this->db->select('id_vendor, nama_vendor');
    return $this->db->get('vendor')->result();
  }

  public function saveMaterial($data, $nama)
  {
    $errorUploadType = $statusMsg = ''; 
     
    $this->db->insert('material', $data);
    $id_material = $this->db->insert_id();
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
          $fileData = $this->upload->data(); 
          $uploadData[$i]['path'] = $fileData['file_name']; 
          $uploadData[$i]['id_material'] = $id_material; 
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
    redirect(base_url('Material'));
  }
  
  public function updateMaterial($data, $nama, $id_material)
  {
    $errorUploadType = $statusMsg = ''; 
    if ($_FILES['files']['size'] == 0) {
      $this->db->where('id_material', $id_material);
      $this->db->update('material', $data);
      redirect(base_url('Material'));
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

  public function deleteMaterial($id)
  {
    $this->db->select('path');
    $this->db->where('id_material', $id);
    $gambar = $this->db->get('material_gambar')->result(); 
    foreach ($gambar as $gb) {
      unlink("assets/images/material/".$gb->path);
    }

    $tables = array('material', 'material_gambar');
    $this->db->where('id_material', $id);
    $this->db->delete($tables);
  }
}