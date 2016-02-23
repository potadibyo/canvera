<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Photographer extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function create($data) {
        $this->db->insert('photographers', $data);
        return $this->db->insert_id();
    }
    
    function verify_photographer($email, $password) {
        $this->db->select('id, name, email');
        $this->db->from('photographers');
        $this->db->where(array(
            'email' => $email, 
            'password' => $password
        ));
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->first_row();
        }
        return false;
    }
    
    function get_photographer_byId($id) {
        $query = $this->db->get_where("photographers", array('id' => $id));
        return $query->first_row();
    }
    
    function get_photographer_byCategoryId($id) {
        $this->db->select();
        $this->db->from('photographers');
        $query = $this->db->get();
    }
    
    function get_photographer_locations() {
        $this->db->select('city');
        $this->db->from('photographers');
        $this->db->group_by('city');
        $query = $this->db->get();
        return $query->result();
    }
}

?>