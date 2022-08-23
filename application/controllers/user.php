<?php 

/**
  * 
  */
class User extends CI_Controller
{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('v_home');	
	}

	function web_papercraft(){
		$this->load->view('v_web_papercraft');
	}

	function web_galeri(){
		$this->load->view('v_web_galeri');
	}

	function web_artikel(){
		$this->load->view('v_web_artikel');
	}

	function data_artikel(){
		$datartikel= $this->m_data->tampil_data("artikel")->result();
		$data = array
		(
			'datamu' => $datartikel
		);
		$this->load->view('v_web_artikel',$data);
	}

	function data_artikel2($no_id){
		$where = array('no_id' => $no_id);
		$data['artikel'] = $this->m_data->tampil_data2($where,'artikel')->result();
		$this->load->view('v_web_artikel2',$data);
	}

	function data_papercraft_kategori(){
		$data['paper']= $this->m_data->tampil_data_kategori();
		
		$this->load->view('v_web_papercraft',$data);
	}

	function data_papercraft($kategori){
		$where = array('kategori' => $kategori);
		$data['paper'] = $this->m_data->tampil_data2($where,'paper')->result();
		$this->load->view('v_web_papercraft2',$data);
	}

	function data_allpapercraft(){
		$datartikel= $this->m_data->tampil_data("paper")->result();
		$data = array
		(
			'paper' => $datartikel
		);
		$this->load->view('v_web_papercraft2',$data);
	}

	function data_papercraft_indie($id_paper){
		$where = array('id_paper' => $id_paper);
		$data['paper'] = $this->m_data->tampil_data2($where,'paper')->result();
		$this->load->view('v_web_papercraft3',$data);
	}

	function data_foto(){
		$datapaper= $this->m_data->tampil_data("foto")->result();
		$data = array
		(
			'datamu' => $datapaper
		);
		$this->load->view('v_web_foto',$data);
	}

	function data_video(){
		$datapaper= $this->m_data->tampil_data("video")->result();
		$data = array
		(
			'datamu' => $datapaper
		);
		$this->load->view('v_web_video',$data);
	}

	function page(){
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'papercraft/user/data_artikel';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_data',$data);
	}

} 
?>