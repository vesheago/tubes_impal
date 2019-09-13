<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->view('page_header_admin'); 
		$this->load->view('page_index');
	}

	public function tagihan(){
		$array['data']=$this->M_admin->show_tagihan_admin();
		$this->load->view('page_header_admin');
		$this->load->view('page_tagihan',$array);
	}

	public function updateTagihan()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id_tagihan');
		$this->M_admin->update_tagihan($status,$id);
		redirect('index.php/C_admin/tagihan');
	}
}