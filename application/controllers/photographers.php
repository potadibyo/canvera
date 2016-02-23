<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Photographers extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('photographer');
    }
    
    function index() {
        $this->load->view('includes/header', array('title' => "Photographer's Zone - Canvera.com"));
        $this->load->view('photo_action');
        $this->load->view('includes/footer');
    }
    
    function signup() {
        
        if($this->input->post('signup')) {
            $rules = array(
                array(
                    'field' => 'name',
                    'label' => 'Your name/Studio name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|is_unique[photographers.email]|valid_email'
                ),
                array(
                    'field' => 'password1',
                    'label' => 'Password',
                    'rules' => 'required|matches[password2]'
                ),
                array(
                    'field' => 'password2',
                    'label' => 'Confirm Password',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'city',
                    'label' => 'City',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'category',
                    'label' => 'Category',
                    'rules' => 'required'
                )
            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run() == TRUE) {
                $values = array(
                    'name' => trim($this->input->post('name')),
                    'email' => trim($this->input->post('email')),
                    'password' => sha1(trim($this->input->post('password1'))),
                    'city' => strtolower(trim($this->input->post('city'))),
                    'state' => strtolower(trim($this->input->post('state')))
                );
                $insert_id = $this->photographer->create($values);
                $categories = $this->input->post('category');
                $this->load->model('category');
                foreach($categories as $cat_id) {
                    $this->category->set_photographer_category(array(
                        'photographer_id' => $insert_id, 
                        'category_id' => $cat_id));
                }
                $this->session->set_flashdata('success_msg','You have been listed as photographer on Canvera.com...');
                redirect(base_url().'photographers');
            }
        }
        $this->load->helper("form");
        $this->load->view('includes/header', array('title' => "Canvera.com - Get your studio listed "));
        $this->load->view('signup_photographer');
        $this->load->view('includes/footer');
    }
    
    function signin() {
        $data["title"] = "Canvera.com - Signin ";
        $this->load->helper("form");
        $this->load->library('session');
        $this->load->library("form_validation");
        if($this->input->post("signin")) {
            $rules = array(
                array(
                    "field" => "email",
                    "label" => "Email",
                    "rules" => "required|valid_email"
                ),
                array(
                    "field" => "password",
                    "label" => "Password",
                    "rules" => "required"
                )
            );
            $this->form_validation->set_rules($rules);
            if($this->form_validation->run() == TRUE) {
                $row = $this->photographer->verify_photographer($this->input->post("email"), sha1($this->input->post("password")));
                if($row) {
                    $this->session->set_userdata('name', $row->name);
                    $this->session->set_userdata('id', $row->id);
                    $this->session->set_flashdata('success_msg','You are now logged in...');
                    redirect(base_url()."home");
                } else {
                    $this->session->set_flashdata('err_msg','Invalid Username or Password! Try Again...');                    
                    redirect(base_url()."photographers/signin");
                }                
            }
        }
        $this->load->view('includes/header', $data);
        $this->load->view('signin_photographer', $data);
        $this->load->view('includes/footer');
    }
    
    function profile() {
        if(!$this->session->userdata('name') && !$this->session->userdata('id')) {
            $this->session->set_flashdata('err_msg', "Please login to view your profile..");
            redirect(base_url(). "photographers/signin");
        }
        $data['photographer'] = $this->photographer->get_photographer_byId($this->session->userdata('id'));
        $this->load->view('includes/header', array('title'=>'Canvera.com - User profile'));
        $this->load->view('photographer_profile', $data);
        $this->load->view('includes/footer');
    }
}

