<?php

  /**
   *
   */
  class M_login extends CI_Model
  {
    public function get($table, $field, $where)
    {
      return $this->db->get_where($table,array($field=>$where))->row();
    }

    public function getDetail($table,$field,$where)
    {
      return $this->db->get_where($table,array($field=>$where))->row();
    }
  }


?>
