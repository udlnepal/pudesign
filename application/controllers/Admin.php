<?php
class Admin extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('news_events_model');
        $this->load->helper('url_helper');
         $this->load->library('session');
    }
 
    public function index()
    {

        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {
        $data['middle_block'] = $this->admin_model->get_admin();

        $data['news_events']=$this->news_events_model->get_news_events_qlinks();
     //  print_r($data); 

        $data['title'] = 'admin archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    }
 
   /* public function view($slug = NULL)
    {
        $data['admin_item'] = $this->admin_model->get_admin($slug);
        
        if (empty($data['admin_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['admin_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('admin/view', $data);
        $this->load->view('templates/footer');
    }*/
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a admin item';
 
        $this->form_validation->set_rules('icon_class_value', 'Icon Class', 'required');
        $this->form_validation->set_rules('title_mblock', 'Title', 'required');
        $this->form_validation->set_rules('content_mblock', 'Content', 'required');
 
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->admin_model->set_admin();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit($id)
    {

        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            echo"i am here"; exit;
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $data['title_mblock'] = 'Edit a admin item';        
        $data['mblock_item'] = $this->admin_model->get_admin_by_id($id);
        
        $this->form_validation->set_rules('title_mblock', 'Title', 'required');
        $this->form_validation->set_rules('content_mblock', 'Content', 'required');
        $this->form_validation->set_rules('icon_class_value','Icon Class','required');
        if ($this->form_validation->run() === FALSE)
        {
           // echo"first"; exit;
            $this->load->view('templates/header', $data);
           $this->load->view('/admin/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
           // echo"second";exit;
            $this->admin_model->set_admin($id);
            $this->load->view('admin/success');
            redirect( base_url() . 'index.php/admin');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $admin_item = $this->admin_model->get_admin_by_id($id);
        
        $this->admin_model->delete_admin($id);        
        redirect( base_url() . 'admin');        
    }



  /*   public function create_newsevents()
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
            $this->load->view('admin/create_newsevents');
            $this->load->view('templates/footer');
         
        }
        else
        {
            $this->news_events_model->set_news_events();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/success');
            $this->load->view('templates/footer');

        }
    }*/
}