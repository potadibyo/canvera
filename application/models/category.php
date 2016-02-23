<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function create($data) {
        $this->db->insert('categories', $data);
    }
    
    function set_photographer_category($data) {
        $this->db->insert('category_map', $data);
    }
    
    function read_all() {
        $query = $this->db->get('categories');
        return $query->result();
    }
}
