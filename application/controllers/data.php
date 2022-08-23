<?php 

/**
  * 
  */
class Data extends CI_Controller
{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function index(){
		$this->load->view('v_dashboard');
	}


	function web_galeri(){
		$this->load->view('v_web_galeri');
	}

	function input_data_papercraft(){
		$this->load->view('v_input_data_papercraft');
	}

	function input_data_foto(){
		$this->load->view('v_input_data_galeri_foto2');
	}

	function input_data_video(){
		$this->load->view('v_input_data_galeri_video2');
	}

	function input_data_artikel(){
		$this->load->view('v_input_data_artikel');
	}

	function input_data_admin(){
		$this->load->view('v_input_data_admin');
	}

	function data_papercraft(){
		$datapaper= $this->m_data->tampil_data("paper")->result();
		$data = array
		(
			'datamu' => $datapaper
		);
		$this->load->view('v_tampil_data_papercraft',$data);
	}

	function data_foto(){
		$datapaper= $this->m_data->tampil_data("foto")->result();
		$data = array
		(
			'datamu' => $datapaper
		);
		$this->load->view('v_tampil_data_foto',$data);
	}

	function data_video(){
		$datavideo= $this->m_data->tampil_data("video")->result();
		$data = array
		(
			'datamu' => $datavideo
		);
		$this->load->view('v_tampil_data_video',$data);

	}

	function data_artikel(){
		$datartikel= $this->m_data->tampil_data("artikel")->result();
		$data = array
		(
			'datamu' => $datartikel
		);
		$this->load->view('v_tampil_data_artikel',$data);
	}

	function data_artikel2($no_id){
		$where = array('no_id' => $no_id);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$this->load->view('v_tampil_data_artikel2',$data);
	}
	
	function data_admin(){
		$datalogin= $this->m_data->tampil_data("user")->result();
		$data = array
		(
			'datamu' => $datalogin
		);
		$this->load->view('v_tampil_data_admin',$data);
	}

	function tambah_papercraft(){
		$data = array(
			'judul' => $this->input->post('judul'),
			'tingkat' => $this->input->post('tingkat'),
			'kategori' => $this->input->post('kategori'),
			'file' => $this->input->post('file')
		);
		$this->m_data->masuk_data($data, 'paper');
		redirect('data/index');
	}

	function tambah_artikel(){
		$data = array(
			'judul' => $this->input->post('judul'),
			'isi_artikel' => $this->input->post('isi_artikel')
		);

		$this->m_data->masuk_data($data, 'artikel');
		redirect('data/index');
	}

	function tambah_video(){
		$data = array(
			'filename' => $this->input->post('filename')
		);

		$this->m_data->masuk_data($data, 'video');
		redirect('data/index');
	}

	function tambah_admin(){
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password')
		);

		$this->m_data->masuk_data($data, 'user');
		redirect('data/index');
	}

	function hapus_papercraft($id_paper){
		$where = array('id_paper' => $id_paper);
		$this->m_data->hapus_data($where,'paper');
		redirect('data/index');
	}

	function hapus_video($no_id){
		$where = array('no_id' => $no_id);
		$this->m_data->hapus_data($where,'video');
		redirect('data/data_video');
	}

	function hapus_artikel($no_id){
		$where = array('no_id' => $no_id);
		$this->m_data->hapus_data($where,'artikel');
		redirect('data/data_artikel');
	}

	function hapus_admin($no_id){
		$where = array('no_id' => $no_id);
		$this->m_data->hapus_data($where,'user');
		redirect('data/index');
	}

	function edit_papercraft($id_paper){
		$where = array('id_paper' => $id_paper);
		$data['papercraft'] = $this->m_data->edit_data($where,'paper')->result();
		$this->load->view('v_edit_data_papercraft',$data);
	}

	function update_papercraft(){
		$id_paper = $this->input->post('id_paper');
		$judul = $this->input->post('judul');
		$tingkat = $this->input->post('tingkat');
		$kategori = $this->input->post('kategori');
		$data = array(
			'judul' => $judul,
			'tingkat' => $tingkat,
			'kategori' => $kategori
		);

		$where = array(
			'id_paper' => $id_paper
		);
		
		$this->m_data->update_data($where,$data,'paper');
		redirect('data/data_papercraft');
	}

	function edit_video($no_id){
		$where = array('no_id' => $no_id);
		$data['video'] = $this->m_data->edit_data($where,'video')->result();
		$this->load->view('v_edit_data_video',$data);
	}

	function update_video(){
		$no_id = $this->input->post('no_id');
		$filename = $this->input->post('filename');
		$data = array(
			'filename' => $filename
		);

		$where = array(
			'no_id' => $no_id
		);
		
		$this->m_data->update_data($where,$data,'video');
		redirect('data/index');
	}


	function edit_artikel($no_id){
		$where = array('no_id' => $no_id);
		$data['artikel'] = $this->m_data->edit_data($where,'artikel')->result();
		$this->load->view('v_edit_data_artikel',$data);
	}

	function update_artikel(){
		$no_id = $this->input->post('no_id');
		$judul = $this->input->post('judul');
		$isi_artikel = $this->input->post('isi_artikel');
		$data = array(
			'judul' => $judul,
			'isi_artikel' => $isi_artikel
		);

		$where = array(
			'no_id' => $no_id
		);

		
		$this->m_data->update_data($where,$data,'artikel');
		redirect('data/index');
	}

	function edit_admin($no_id){
		$where = array('no_id' => $no_id);
		$data['admin'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit_data_admin',$data);
	}

	function update_admin(){
		$no_id = $this->input->post('no_id');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $password
		);

		$where = array(
			'no_id' => $no_id
		);
		
		$this->m_data->update_data($where,$data,'user');
		redirect('data/index');
	}

	function daftar_api(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'auth' => $this->input->post('auth')
		);

		$this->m_data->masuk_data($data, 'user_api');
		redirect('data/index');
	}

	function tambah_api(){
		$this->load->view('v_input_api');
	}

} 
?>