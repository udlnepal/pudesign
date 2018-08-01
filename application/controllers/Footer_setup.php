<?php
class Footer_setup extends CI_Controller {
public function __construct()
    {
        parent::__construct();
          $this->load->model('admin_model');
        $this->load->model('footer_setup_model');     
        $this->load->helper('url_helper');
         $this->load->library('session');
    }
    
}
?>