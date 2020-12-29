<?php

class M_User extends CI_Model {
    public function saveUser($account)
    {
      $this->db->insert('user_account', $account);
      $data= [ 
        'id_user' => $this->db->insert_id(),
        'nama_depan' => $this->input->post('nama_depan', TRUE),
        'nama_belakang' => $this->input->post('nama_belakang', TRUE),
        'no_hp' => $this->input->post('no_hp', TRUE),
        'email' => $this->input->post('email', TRUE)
      ];
      $this->db->insert('user_detail', $data);
    }
    
    public function getPelanggan()
    {
      $this->db->where('role_id', '1');
      $this->db->where('status', '1');
      $this->db->from('user_detail');
      $this->db->join('user_account', 'user_account.id_user = user_detail.id_user');
      return $this->db->get()->result();
    }

    public function getTukang()
    {
      $this->db->from('tukang_account');
      $this->db->join('tukang_detail', 'tukang_detail.id_tukang = tukang_account.id_tukang');
      return $this->db->get()->result();
    }
    
    public function nonaktifkanPengguna($id)
    {
      $this->db->set('status', '0');
      $this->db->where('id_user', $id);
      $this->db->update('user_account');
    }
}