<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('category');
        $this->load->model('photographer');
        $this->load->helper('form');
        $data['locations'] = $this->photographer->get_photographer_locations();
        $data['categories'] = $this->category->read_all();
        $this->load->view('includes/header', array('title' => 'Canvera.com'));
        $this->load->view('includes/search_photographer', $data);
        $this->load->view('home_page');
        $this->load->view('includes/footer');
    }                
    
    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('warning_msg', 'You are logged out..');
        redirect(base_url()."photographers/signin");
    }
}