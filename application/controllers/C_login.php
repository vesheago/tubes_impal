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
		$cek_customer=$this->M_login->auth_customer($username,$password);
		$cek_manajer=$this->M_login->auth_manajer($username,$password);
				if($cek_admin->num_rows() > 0){
					$data=$cek_admin->row_array();
        			$this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('ses_id',$data['id_admin']);
					$this->session->set_userdata('ses_nama',$data['nama_admin']);
					redirect('index.php/C_admin');
				}else if($cek_customer->num_rows() > 0){
					$data=$cek_customer->row_array();
        			$this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('ses_id',$data['id_customer']);
					$this->session->set_userdata('ses_nama',$data['nama_customer']);
					redirect('index.php/C_customer');
				}else if($cek_manajer->num_rows() > 0){
					$data=$cek_manajer->row_array();
        			$this->session->set_userdata('masuk',TRUE);
					$this->session->set_userdata('ses_id',$data['id_manajer']);
					$this->session->set_userdata('ses_nama',$data['nama_manajer']);
					redirect('index.php/C_manajer');
				}else{  // jika username dan password tidak ditemukan atau salah
					$url=base_url();
					echo $this->session->set_flashdata('msg','Username Atau Password Salah');
					redirect($url);
				}
	}
	
	public function login(){
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
	
		$user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
	
		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
		  $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
		  redirect('auth'); // Redirect ke halaman login
		}else{
		  if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
			$session = array(
			  'authenticated'=>true, // Buat session authenticated dengan value true
			  'username'=>$user->username,  // Buat session username
			  'nama'=>$user->nama // Buat session authenticated
			);
	
			$this->session->set_userdata($session); // Buat session sesuai $session
			redirect('page/welcome'); // Redirect ke halaman welcome
		  }else{
			$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
			redirect('auth'); // Redirect ke halaman login
		  }
		}
	  }

    function logout(){
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
}