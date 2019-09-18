<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manajer extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_data_service(){
		$hasil=$this->db->query("SELECT id_tagihan, tgl_tagihan, no_polisi, rincian, total_harga, status FROM tagihan");
		return $hasil;
	}

	function get_total_service(){
		$hasil=$this->db->query("SELECT id_tagihan, tgl_tagihan, no_polisi, rincian, sum(total_harga) as total, status FROM tagihan");
		return $hasil;
	}

	function get_bulan_service(){
		$hasil=$this->db->query("SELECT DISTINCT DATE_FORMAT(tgl_tagihan,'%M %Y') AS bulan FROM tagihan");
		return $hasil;
	}

	function get_service_perbulan($bulan){
		$hasil=$this->db->query("SELECT id_tagihan, DATE_FORMAT(tgl_tagihan,'%M %Y') AS bulan, DATE_FORMAT(tgl_tagihan,'%d %M %Y') AS tgl_tagihan,  no_polisi, rincian, total_harga, status FROM tagihan WHERE DATE_FORMAT(tgl_tagihan,'%M %Y')='$bulan'");
		return $hasil;
	}
	function get_total_service_perbulan($bulan){
		$hasil=$this->db->query("SELECT id_tagihan, DATE_FORMAT(tgl_tagihan,'%M %Y') AS bulan, DATE_FORMAT(tgl_tagihan,'%d %M %Y') AS tgl_tagihan,  no_polisi, rincian, sum(total_harga) as total, status FROM tagihan WHERE DATE_FORMAT(tgl_tagihan,'%M %Y')='$bulan'");
		return $hasil;
	}
}