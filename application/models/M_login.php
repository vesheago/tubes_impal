<?php
class M_login extends CI_Model{
	//cek id_admin dan password admin
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE id_admin='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	//cek id_customer dan password customer
	function auth_customer($username,$password){
		$query=$this->db->query("SELECT * FROM customer WHERE id_customer='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	//cek id_manajer dan password manajer
	function auth_manajer($username,$password){
		$query=$this->db->query("SELECT * FROM manajer WHERE id_manajer='$username' AND password='$password' LIMIT 1");
		return $query;
	}
}