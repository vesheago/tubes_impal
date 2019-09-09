<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}


}