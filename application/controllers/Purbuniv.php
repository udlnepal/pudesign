<?php
class Purbuniv extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('purbuniv_model');
         $this->load->model('news_events_model');
        $this->load->helper('url_helper');
    }
 

public function index()
    {
       $data['middle_block'] = $this->purbuniv_model->get_mid_block();
       $data['news_events'] = $this->news_events_model->get_news_events_qlinks();
           /*  print_r($data);
      exit();*/
        $this->load->view('purbuniv/common/header',$data);
        $this->load->view('purbuniv/index');
        $this->load->view('purbuniv/common/footer');
    }
}
?>