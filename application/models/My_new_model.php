<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_new_model extends CI_Model {

    public function getInfo()
    {
        $query = $this->db->get('test');
        
        return $query->result_array();
    }

    public function setInfo()
    {
        $data = array(
            'name' => 'nnn'
        );
        $query = $this->db->insert('test',$data);

        return $query;
    }
}
