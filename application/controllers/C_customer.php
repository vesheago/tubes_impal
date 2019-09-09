<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_customer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_customer');
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->view('page_header'); 
		$this->load->view('page_index');
    }
    
    public function service()
    {
        
    }
}