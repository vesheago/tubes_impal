<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	// function GetJenisKeluhan(){
	// 	$query = $this->db->query('SELECT * FROM keluhan');
    //     return $query->result();
	// }

	function show_tagihan_customer($id_customer){ //menampilkan daftar tagihan
		$hasil=$this->db->query("SELECT id_customer_FK, id_tagihan, tgl_tagihan, no_antrean, no_polisi, rincian, total_harga, status FROM tagihan WHERE id_customer_FK='$id_customer'");
		return $hasil;
	}

}