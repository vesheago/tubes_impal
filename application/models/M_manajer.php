<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manajer extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function show_tagihan_manajer(){ //menampilkan daftar tagihan
		$hasil=$this->db->query("SELECT id_tagihan, tgl_tagihan, jam_tagihan, no_antrean, no_polisi, rincian, total_harga, status FROM tagihan");
		return $hasil;
	}

	function get_data_service(){
		$hasil=$this->db->query("SELECT id_tagihan, tgl_tagihan, jam_tagihan, no_antrean, no_polisi, rincian, total_harga, status FROM tagihan");
		return $hasil;
	}
}