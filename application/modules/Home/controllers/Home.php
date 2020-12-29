<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller{
  

    public function Index()
    {
      $pagenum = $_GET['page'];
      $pageination = $this->model('Pagination')->setTotalRecords('pesanan',5,'namapemesan',$pagenum);

      $this->view('home',['data'=>$pageination['data'],'page'=>$pageination['hal']
                  ,'next'=>$pageination['next'],'prev'=>$pageination['prev'],
                  'search'=>$pageination['search'], 'active'=>$pageination['active']]);
    }
  }


?>
