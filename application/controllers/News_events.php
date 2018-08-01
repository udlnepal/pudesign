<?php
class News_events extends CI_Controller {
	
public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    
        $this->load->model('news_events_model');
        $this->load->helper('url_helper');
    }
 

 public function create_newsevents()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a admin item';
 
        $this->form_validation->set_rules('ne_ql_type', 'News Events Or Quick Links', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('date', 'Date');
        $this->form_validation->set_rules('link_address', 'Url', 'required');
 
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('news_events/create_newsevents');
            $this->load->view('templates/footer');
         
        }
        else
        {
            $this->news_events_model->set_news_events();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/success');
            $this->load->view('templates/footer');

        }
    }

  
    public function edit_neq($ne_ql_id)
    {

        $id = $this->uri->segment(3);
        
        if (empty($ne_ql_id))
        {
            echo"i am here"; exit;
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a admin item';        
        $data['new_items'] = $this->news_events_model->get_news_events_byid($ne_ql_id);
        $this->form_validation->set_rules('ne_ql_type', 'Type', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('date', 'Date');
        $this->form_validation->set_rules('link_address','Link Address','required');
        if ($this->form_validation->run() === FALSE)
        {
           // echo"first"; exit;
            $this->load->view('templates/header', $data);
           $this->load->view('/news_events/edit_neq', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
           // echo"second";exit;
            $this->news_events_model->set_news_events($ne_ql_id);
            $this->load->view('admin/success');
            redirect( base_url() . 'admin');
        }
    }
    
    public function delete_neq()
    {
        $ne_ql_id = $this->uri->segment(3);
        
        if (empty($ne_ql_id))
        {
            show_404();
        }
                
        $new_items = $this->news_events_model->get_news_events_byid($ne_ql_id);
        
        $this->news_events_model->delete_neq($ne_ql_id);        
        redirect( base_url() . 'admin');        
    }



}
?>