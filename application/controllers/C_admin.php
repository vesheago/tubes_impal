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
		redirect('c_admin/tagihan');
	}

	// public function kelolaService()
	// {
	// 	$id_customer = $this->input->post('id_customer');
	// 	if(isset($_POST['service'])){
	// 		$values = $_POST['service'];
	// 		$total = 0;
	// 		for($i=0;$i<count($values);$i++)
	// 		{
	// 			$total += $values[i];
	// 		}
	// 		// print_r($_POST['service']);
	// 		echo $total;
	// 	}
	// 	// $data = array(
	// 	// 	'id_customer' => $id_customer,
	// 	// 	'id_tagihan' => $id_tagihan,
	// 	// 	'total' => $total
	// 	// );
	// 	$this->M_admin->insert_Service($id_customer,$total);
	// 	redirect('index.php/C_admin');
	// 	// $status = $this->input->post(['service']);
		
	// }

	// public function checkChoice(whichbox){
	// 	with (whichbox.form){
	// 	 if (whichbox.checked == false)
	// 	  hiddentotal.value = eval(hiddentotal.value) - eval(whichbox.value);
	// 	 else
	// 	  hiddentotal.value = eval(hiddentotal.value) + eval(whichbox.value);
	// 	  return(formatCurrency(hiddentotal.value));
	// 	}
	//    }

	// public function formatCurrency(num){
	// 	num = num.toString().replace(/\$|\,/g,'');
	// 	if(isNaN(num)) num = "0";
	// 	 cents = Math.floor((num*100+0.5)%100);
	// 	 num = Math.floor((num*100+0.5)/100).toString();
	// 	if(cents < 10) cents = "0" + cents;
	// 	 for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
	// 	 num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
	// 	 return ("Rp. " + num + "," + cents);
	//    }
}