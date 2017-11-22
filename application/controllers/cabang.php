<?php 
/**
 * 
 */
 class cabang extends CI_Controller
 {
	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('cabang_models');
 	}
 	function index()
 	{
 		$data['cabang']=$this->cabang_models->ambil_data();
 		$this->load->view('cabang/cabang_list',$data);
 	}
 	function tambah(){

 	$data= array(
 	    'id_cabang'=>set_value('id_cabang'),
 		'nama_cabang'=>set_value('nama_cabang'),
 		'password'=>set_value('password'), 		
 		'alamat_cabang'=>set_value('alamat_cabang'),
 		'id'=>set_value('id'),
 		'button'=>'Tambah',
 		'action'=>site_url('cabang/tambah_aksi'),
 		);
 	$this->load->view('cabang/cabang_form',$data);

 		
} 
function tambah_aksi()
{
	$data= array(
		'nama_cabang'=>$this->input->post('nama_cabang'),
		'password'=>$this->input->post('password'),
		'alamat_cabang'=>$this->input->post('alamat_cabang'),
		);
	$this->cabang_models->tambah_data($data);
	redirect(site_url('cabang'));
}
function delete($id)
{
	$this->cabang_models->hapus_data($id);
	redirect(site_url('cabang'));
}
function edit($id)
{
	$pbl=$this->cabang_models->ambil_data_id($id);
	$data=array(
		'nama_cabang'=>set_value('nama_cabang',$pbl->nama_cabang),
		'password'=>set_value('password',$pbl->password),
		'alamat_cabang'=>set_value('alamat_cabang',$pbl->alamat_cabang),
 		'id_cabang'=>set_value('id_cabang',$pbl->id_cabang),
 		'button'=>'Edit',
 		'action'=>site_url('cabang/edit_aksi'),
 		);
 	$this->load->view('cabang/cabang_form',$data);
		
}function edit_aksi()
{
$data=array(
			'nama_cabang'=>$this->input->post('nama_cabang'),
			'password'=>$this->input->post('password'),
			'alamat_cabang'=>$this->input->post('alamat_cabang'),
			


			
	);
	$id=$this->input->post('id_cabang');
		$this->cabang_models->edit_data($id,$data);
		redirect(site_url('cabang'));
}}
 ?>