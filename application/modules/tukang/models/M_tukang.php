<?php

  /**
   *
   */
  class M_tukang extends CI_Model
  {

    public function get()
    {
      return $this->db->get_where('tukang_account',array('id_tukang'=>$this->session->userdata('id_tukang')))->row();
    }

    public function updatePass($new_password)
    {
      $this->db->where('id_tukang',$this->session->userdata('id_tukang'));
      $this->db->update('tukang_account',$new_password);
    }

  }


?>
