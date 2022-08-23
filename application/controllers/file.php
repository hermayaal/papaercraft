<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	function  __construct() {
    parent::__construct();
        //load our helper
    $this->load->helper(array('form', 'url'));
        //load our model
    $this->load->model('m_file');
    $this->load->library('session');
  }

  public function index(){
		//load session library to use flashdata
    
    $data['user'] = $this->m_file->tampil_data()->result();
    $this->load->view('v_dashboard',$data);

  }

  public function insert(){
		//load session library to use flashdata
    $this->load->library('session');

	 	//Check if file is not empty
    if(!empty($_FILES['upload']['name'])){
      $config['upload_path'] = 'upload/';
            //restrict uploads to this mime types
      
      $config['allowed_types'] = 'pdf';
      $config['file_name'] = $_FILES['upload']['name'];
      $config['overwrite']      = true;

            //Load upload library and initialize configuration
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if($this->upload->do_upload('upload'))
      {
        $uploadData = $this->upload->data();
        $filename = $uploadData['file_name'];

				//set file data to insert to database
        $file['judul'] = $this->input->post('judul');
        $file['tingkat'] = $this->input->post('tingkat');
        $file['kategori'] = $this->input->post('kategori');
        $file['gambar'] = $this->input->post('gambar');
        $file['filename'] = $filename;

        $query = $this->m_file->insertfile($file);
        if($query){
          redirect('file/index');
        }
        else{
         header('location:'.base_url().$this->index());
         $this->session->set_flashdata('error','File uploaded but not inserted to database');
       }

     }else{
       header('location:'.base_url().$this->index());
       $this->session->set_flashdata('error','Cannot upload file.'); 
     }
   }else{
    header('location:'.base_url().$this->index());
    $this->session->set_flashdata('error','Cannot upload empty file.');
  }

}

public function insert_foto(){
    //load session library to use flashdata
  $this->load->library('session');

    //Check if file is not empty
  if(!empty($_FILES['upload']['name'])){
    $config['upload_path'] = 'upload/foto/';
            //restrict uploads to this mime types
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = $_FILES['upload']['name'];
    $config['overwrite']      = true;

            //Load upload library and initialize configuration
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('upload'))
    {
      $uploadData = $this->upload->data();
      $filename = $uploadData['file_name'];

        //set file data to insert to database
      $file['filename'] = $filename;

      $query = $this->m_file->insertfile_foto($file);
      if($query){
        redirect('file/index');
      }
      else{
       header('location:'.base_url().$this->index());
       $this->session->set_flashdata('error','File uploaded but not inserted to database');
     }

   }else{
     header('location:'.base_url().$this->index());
     $this->session->set_flashdata('error','Cannot upload file.'); 
   }
 }else{
  header('location:'.base_url().$this->index());
  $this->session->set_flashdata('error','Cannot upload empty file.');
}

}


public function download($id_paper){
  $this->load->helper('download');
  $fileinfo = $this->m_file->download($id_paper);
  $file = 'upload/'.$fileinfo['filename'];
  force_download($file, NULL);
}

public function hapus($id_paper){
  $fileinfo = $this->m_file->hapus($id_paper);
  $this->db->delete('paper',['id_paper'=>$id_paper]);
  $file = 'upload/'.$fileinfo['filename'];
  unlink($file);
  redirect('file');
}

public function hapus_foto($no_id){
  $fileinfo = $this->m_file->hapus_foto($no_id);
  $this->db->delete('foto',['no_id'=>$no_id]);
  $file = 'upload/'.$fileinfo['filename'];
  unlink($file);
  redirect('file');
}
}
