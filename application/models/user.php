<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function create($data) {
        $this->db->insert('users', $data);
        return ($this->db->affected_rows() == 1) ? true : false;
    }
    
}
