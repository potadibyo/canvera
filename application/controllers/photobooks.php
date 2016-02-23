<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Photobooks extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("photobook");
    }
    
    function index() {
        
    }
}

