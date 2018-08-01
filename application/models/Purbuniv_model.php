<?php
class Purbuniv_model extends CI_Model {

 public function __construct()
    {
        $this->load->database();
    }


 public function get_mid_block()
    {
        $query = $this->db->get_where('middle_block');
        return $query->result_array();
    }   


}
 