<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Categories extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getcategory()
	{
		$this->db->select('*');
	$this->db->from('categories');
	//$this -> db -> where('shop_id', $shop_id);
	$q = $this -> db -> get();
if($q->num_rows() >0){
    foreach($q->result() as $row){
        $data[]=$row;
    }
}
return $data;
		
		
		
	}
}
?>