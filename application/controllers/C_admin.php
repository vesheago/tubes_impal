<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$this->load->view('page_header');
		$this->load->view('page_index');
	}

	public $data = array(
		"id" => "12345",
		"nama" => "Admin",
		"kampus"=>"Bengkelku"
	);

	public $data_manager = array(
		"id" => "67890",
		"nama" => "Manager"
	);

	public function tagihan(){
		$x['data']=$this->M_admin->show_tagihan_cust();
		$this->load->view('page_header');
		$this->load->view('page_tagihan',$x);
	}

	public function laporan(){
		$a['data']=$this->M_admin->show_laporan();
		$this->load->view('page_header_manager');
		$this->load->view('page_laporan',$a);
	}

}