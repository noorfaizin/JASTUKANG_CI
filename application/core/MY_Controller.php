<?php

  /**
   *
   */
  class MY_Controller extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->authenticated();
    }

    public function authenticated()
    {
      if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != '') {
          if ($this->uri->segment(1) == 'tukang' && !$this->session->userdata('tukang')) {
            redirect('login/login_tukang');
          }else if ($this->uri->segment(1) == 'user' && !$this->session->userdata('user')){
            redirect('login');
          }
      }
    }
  }


?>
