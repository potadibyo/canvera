<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->model('categories');
    }
    

     function getallcategory()
	 {
		     $data['category'] = $this->categories->getcategory();
		        $this->load->view('includes/header', array('title' => 'Canvera.com')); 
		         $this->load->view('category_page',$data);
		        $this->load->view('includes/footer');
	 }
	  
    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('warning_msg', 'You are logged out..');
        redirect(base_url()."photographers/signin");
    }
}