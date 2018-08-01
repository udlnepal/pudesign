<?php
class News_events_model extends CI_Model {

 	public function __construct()
    {
        $this->load->database();
    }

    public function get_news_events_qlinks()
    {
    $query = $this->db->get_where('news_events');
    return $query->result_array();

    }

     public function get_news_events_byid($ne_ql_id = 0)
    {
        if ($ne_ql_id === 0)
        {
            $query = $this->db->get('news_events');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news_events', array('ne_ql_id' => $ne_ql_id));
        return $query->row_array();
    }


     public function set_news_events($ne_ql_id = 0)
    {
        $this->load->helper('url');
 
   
 
        $data = array(
            'ne_ql_type'=>$this->input->post('ne_ql_type'),
            'title' => $this->input->post('title'),
            'date' => $this->input->post('date'),
            'link_address' => $this->input->post('link_address')
        );
        //print_r($data);
        
   
        if ($ne_ql_id == 0) {
            return $this->db->insert('news_events', $data);
        } else {
            $this->db->where('ne_ql_id', $ne_ql_id);
            return $this->db->update('news_events', $data);
        }
    }
    
    public function delete_neq($ne_ql_id)
    {
        $this->db->where('ne_ql_id', $ne_ql_id);
        return $this->db->delete('news_events');
    }

}
?>