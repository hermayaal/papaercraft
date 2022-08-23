<?php 
/**
 * 
 */
class M_Data extends CI_Model
{
	
	function tampil_data($table){
		return $this->db->get($table);
	}

	function tampil_data2($where,$table){
		return $this->db->get_where($table,$where);
	}

	function tampil_data_kategori(){
		$this->db->select('kategori');
		$this->db->distinct();
        $this->db->from('paper');
        return $this->db->get()->result_array();
	}

	function masuk_data($data, $table){
		return $this->db->insert($table, $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function data($number,$offset){
		return $query = $this->db->get('artikel',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('artikel')->num_rows();
	}

	function get_artikel_list($limit, $start){
        $query = $this->db->get('artikel', $limit, $start);
        return $query;
    }
}
 ?>