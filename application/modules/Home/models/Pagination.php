<?php

  /**
   *
   */
  class Pagination{

    private $_db,$total_record,$table,$limit;

    function __construct()
    {
      $this->_db = Database::getInstance();
    }

    public function setTotalRecords($tbl='',$limit=0,$where='',$num)
    {
      $record = $this->_db->getAll($tbl);

      if($this->is_search()){
        $like = $this->is_search();
        $record = $this->_db->getAllWhereLike($tbl, $where, $like);
      }

      $this->total_record = count($record);

      $data = $this->getData($tbl,$where,$limit);
      $hal = $this->get_pagination_numbers($this->total_record,$limit);
      $next = ($this->current_page() < $hal) ? $this->current_page()+1 : $hal;
      $prev = ($this->current_page() > 1) ? $this->current_page()-1 : 1;
      $active = $this->active_page($num);
      $search = $this->cekSearch();

      return array('data'=>$data,'hal'=>$hal,'next'=>$next,'prev'=>$prev,'search'=>$search,'active'=>$active);
    }

    public function getData($tbl,$where,$limit)
    {
      $this->limit = (int)$limit;
      $start = 0;

      if ($this->current_page() > 1) {
        $start = ($this->current_page() * $this->limit) - $this->limit;
      }

      $data = $this->_db->limitBetween($tbl, $start, $this->limit);

      if ($this->is_search()) {
        $like = $this->is_search();
        $data = $this->_db->whereLimitBetween($tbl,$where,$like,$start,$this->limit);
      }

      return $data;
    }

    public function current_page()
    {
      return isset($_GET['page']) ? (int)$_GET['page'] : 1;
    }

    public function get_pagination_numbers($total,$limit)
    {
      return ceil($this->total_record / $this->limit);
    }

    public function active_page($num)
    {
      return ($num == $this->current_page())? 'active': '';
    }

    //-----------------------Search-----------------------------------

    public function is_search()
    {
      return isset($_GET['search']) ? $_GET['search'] : false;
    }

    public function cekSearch()
    {
      if ($this->is_search()) {
        return '&search='.$this->is_search();
      }

      return '';
    }
  }


?>
