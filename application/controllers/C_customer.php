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
		$this->load->view('page_header_customer'); 
		$this->load->view('page_index');
    }
    
    public function service()
    {
		//$data['dd_jenis'] = $this->M_customer->GetJenisKeluhan();
		$this->load->view('page_header_customer');
		$this->load->view('page_service_customer');
	}
	
	public function add_keluhan()
	{
		$no_polisi = $this->input->post('no_polisi');
		$jenis_keluhan = $this->input->post('jenis_keluhan');
		$Keterangan = $this->input->post('keterangan');
		$jam = $this->input->post('jam');
		$tanggal = $this->input->post('tanggal');
		$no_antrean = $this->input->post('no_antrean');
		$id_customer = $this->input->post('id_customer');
 
		$data = array(
			'no_polisi' => $no_polisi,
			'jenis_keluhan' => $jenis_keluhan,
			'keterangan' => $Keterangan,
			'jam' => $jam,
			'tanggal' => $tanggal,
			'no_antrean' => $no_antrean,
			'id_customer_FK' => $id_customer
			);
		$this->M_customer->input_data($data,'keluhan');
		redirect('c_customer');
	}

	public function antrean()
	{

	}

	public function tagihan_customer(){
		$id_customer=$this->session->userdata('ses_id');
		$array['data']=$this->M_customer->show_tagihan_customer($id_customer);
		$this->load->view('page_header_customer');
		$this->load->view('page_tagihan_customer',$array);
	}
}