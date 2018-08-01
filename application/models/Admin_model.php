<?php
class Admin_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_admin()
    {
       
 
        $query = $this->db->get_where('middle_block');
        return $query->result_array();
    }
    
    public function get_admin_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('middle_block');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('middle_block', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_admin($id = 0)
    {
        $this->load->helper('url');
 
   
 
        $data = array(
            'icon_class_value'=>$this->input->post('icon_class_value'),
            'title_mblock' => $this->input->post('title_mblock'),
            'content_mblock' => $this->input->post('content_mblock')
        );
        
   
        if ($id == 0) {
            return $this->db->insert('middle_block', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('middle_block', $data);
        }
    }
    
    public function delete_admin($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('middle_block');
    }
}