<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function GetTagihan(){
		$this->db->select('id_tagihan','tgl_tagihan','jam_tagihan','total','status');
		$this->db->from('tagihan');
		// $this->db->join('keluhan','keluhan.no_polisi=tagihan.no_polisi_FK');
		$query = $this->db->get();
		return $query->result();
	}

	public function show_tagihan_cust(){
		$hasil=$this->db->query("SELECT id_tagihan, tgl_tagihan, jam_tagihan, total, status FROM tagihan JOIN keluhan
		WHERE tagihan.no_polisi_FK=keluhan.no_polisi");
		return $hasil;
	}

	// public function GetTagihan(){
	// 	$this->db->select('id_tagihan','tgl_tagihan','jam_tagihan','total','status');
	// 	$this->db->from('tagihan');
	// 	$this->db->join('keluhan','keluhan.no_polisi=tagihan.no_polisi_FK');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}
