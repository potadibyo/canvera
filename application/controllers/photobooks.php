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
    
    function create() {
        $uploaded = 0; 
        $not_uploaded = 0;
        $uploaded_image = "";
        
        $data["title"] = "Canvera.com - create a photo album";        
        if(!$this->session->userdata("name") && !$this->session->userdata("id")) {
            $this->session->set_flashdata("warning_msg", "You need to log in to create a photo album");
            redirect(base_url()."photographers/signin");
        }       
        
        if($_POST) {
            $values = array(
                "photographer_id" => $this->session->userdata("id"),
                "name" => $this->input->post("name"),
                "description" => $this->input->post("desc")
            );
            $album_id = $this->photobook->create_photobook($values);
            $images = $_FILES['images'];
            $files_count = count($images["name"]); //get no files selected
            $allowed_ext = array("jpg", "jpeg", "png", "gif", "bmp"); // Allowed file extensions
            for($i = 0; $i < $files_count; $i++) {                                 
                $tmp = explode(".", $images["name"][$i]);
                $file_ext = strtolower(end($tmp));
                
                if(in_array($file_ext, $allowed_ext)) {
                    if($images["size"][$i] < 7340032){
                        $file_on_server = uniqid(). ".". $file_ext;                      
                        $destination = "./album_images/". $file_on_server;
                        
                        if(move_uploaded_file($images["tmp_name"][$i], $destination)) {                            
                            $image_data = array(
                                "album_id" => $album_id,
                                "name_on_server" => $file_on_server,
                                "filename" => $images["name"][$i]
                            );
                            if($this->photobook->save_single_image($image_data)) {
                                $uploaded++;  // no of files uploaded
                                $uploaded_image .= '<img src="'. base_url(). "album_images/" . $file_on_server .'" class="img-rounded" alt="'. $images["name"][$i] .'" height="400" width="270">|';
                            }
                        } else {
                            $not_uploaded++;  // no of files not uploaded
                        }
                    }
                }
            }
            $data["images"] = $uploaded_image;
            if(!$not_uploaded) {
                $warning_msg = "";
            } else { 
                $warning_msg = $not_uploaded. " file(s) not uploaded";                 
                $this->session->set_flashdata("warning_msg", $warning_msg);
            }
            if($uploaded) {
                $success_msg = $uploaded. " file(s) uploaded"; 
                $this->session->set_flashdata("success_msg", $success_msg);
            } else { 
                $success_msg = "";
            }
            redirect(base_url(). "photobooks/viewAlbum/". $album_id);
        }
        $this->load->helper("form");
        $this->load->view("includes/header", $data);
        $this->load->view("create_photobook", $data);
        $this->load->view("includes/footer");
    }
    
    function viewAlbum($id = null) {
        if(!$this->session->userdata("name") && !$this->session->userdata("id")) {
            $this->session->set_flashdata("warning_msg", "You need to log in to view a photo album");
            redirect(base_url()."photographers/signin");
        }
        
        $data["photobook"] = $this->photobook->get_photobook($id);
        if(!$data["photobook"]){ redirect(base_url()."photobooks/create"); }
        $data["images"] = $this->photobook->get_photobook_images($data["photobook"]->id);
        $data["title"] = "Canvera.com - create a photo album";        
        $this->load->view("includes/header", $data);
        $this->load->view("view_photobook", $data);
        $this->load->view("includes/footer");
    }
    
    function myalbums() {
        if(!$this->session->userdata("name") && !$this->session->userdata("id")) {
            $this->session->set_flashdata("warning_msg", "You need to log in to view your photobooks");
            redirect(base_url()."photographers/signin");
        }
        
    }
}

