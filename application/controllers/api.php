<?php 
/**
 * 
 */
class Api extends CI_Controller
{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->model('m_data');
	}

	public function index(){
		$aksesClient = $this->input->get('auth');
		$where = array(
			'auth' => $aksesClient
		);
		
		$cek = count($this->m_login->get_api("user_api", $where));
		if ($cek > 0){
			//dnsdkJSDLN92u3
			$datalogin= $this->m_data->tampil_data("user")->result();
			$data = array
			(
				'dataadmin' => $datalogin
			);
			echo json_encode($data);
		}else{
			echo "Anda tidak punya akses";
		}		
	}
}
?>