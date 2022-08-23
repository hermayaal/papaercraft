<?php
class M_file extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function getAllFiles(){
		$query = $this->db->get('paper');
		return $query->result(); 
	}

	public function getAllFiles_foto(){
		$query = $this->db->get('foto');
		return $query->result(); 
	}
	
	function tampil_data(){
		return $this->db->get('paper');
	}

	public function insertfile($file){
		return $this->db->insert('paper', $file);
	}

	public function insertfile_foto($file){
		return $this->db->insert('foto', $file);
	}

	public function download($id_paper){
		$query = $this->db->get_where('paper',array('id_paper'=>$id_paper));
		return $query->row_array();
	}

	public function hapus($id_paper){
		$query = $this->db->get_where('paper',array('id_paper'=>$id_paper));
		return $query->row_array();
	}

	public function hapus_foto($no_id){
		$query = $this->db->get_where('foto',array('no_id'=>$no_id));
		return $query->row_array();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>