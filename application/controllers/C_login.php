<?php
class C_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('page_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->M_login->auth_admin($username,$password);
				if($cek_admin->num_rows() > 0){
					$data=$cek_admin->row_array();
        	$this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('ses_id',$data['id']);
					$this->session->set_userdata('ses_nama',$data['nama']);
					redirect('C_admin');
				}else{  // jika username dan password tidak ditemukan atau salah
					$url=base_url();
					echo $this->session->set_flashdata('msg','Username Atau Password Salah');
					redirect($url);
				}

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
	}
}