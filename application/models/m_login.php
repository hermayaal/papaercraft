<?php 

class M_login extends CI_Model
{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function get_password_users($username){
		$this->db->where('username', $username);
		$this->db->limit(1);
		return $this->db->get("user")->result_array();
	}

	public function cek_user($data) {
		$query = $this->db->get_where('user', $data);
		return $query;
	}

	public function get_api($table, $where){
		$this->db->get_where($table, $where);
		$this->db->limit(1);
		return $this->db->get("user_api")->result_array();
	}
}	

?>