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

	public function index(){ 
		$this->load->view('page_header_manajer');
		$this->load->view('page_index');
	}

	public function laporan(){
		// $this->load->view('page_header_manajer');
		$data['service_bln']=$this->M_manajer->get_bulan_service();
		// $data['jual_thn']=$this->m_laporan->get_tahun_jual();
		$this->load->view('page_laporan',$data);
	}

	function lap_data_service(){
		$a['data']=$this->M_manajer->get_data_service();
		$a['jml']=$this->M_manajer->get_total_service();
		$this->load->view('page_lap_service',$a);
	}

	function lap_service_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->M_manajer->get_total_service_perbulan($bulan);
		$x['data']=$this->M_manajer->get_service_perbulan($bulan);
		$this->load->view('page_lap_service_perbulan',$x);
	}
}