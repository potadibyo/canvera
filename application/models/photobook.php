<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Photobook extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function create_photobook($data) {
        $this->db->insert('photo_albums', $data);
        return $this->db->insert_id();
    }
    
    function get_photobook($id) {
        $query = $this->db->get_where("photo_albums", array("id" => $id),1);
        return $query->first_row();
    }
    
    function get_photobook_images($album_id) {
        $query = $this->db->get_where("album_images", array("album_id" => $album_id));
        return $query->result();
    }
    
    function save_single_image($data) {
        $this->db->insert("album_images", $data);
        return $this->db->insert_id();
    }
    
    function update_single_image($id, $title) {
        $this->db->where("id", $id);
        $this->db->update("album_images", array("title" => $title));
    }
}