<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_manajer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_manajer');
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	public function index()
	{ 
		$this->load->view('page_header_manajer');
		$this->load->view('page_index');
	}

	public function laporan(){
		$a['data']=$this->M_manajer->show_tagihan_manajer();
		$this->load->view('page_header_manajer');
		$this->load->view('page_laporan',$a);
	}
}