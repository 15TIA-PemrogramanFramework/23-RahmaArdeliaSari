<?php 
/**
 * 
 */
 class pembeli extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('pembeli_models');
 	}
 	function index()
 	{
 		$data['pembeli']=$this->pembeli_models->ambil_data();
 		$this->load->view('pembeli/pembeli_list',$data);
 	}
 	function tambah(){

 	$data= array(
 	    'id_pembeli'=>set_value('id_pembeli'),
 		'nama'=>set_value('nama'),
 		'alamat'=>set_value('alamat'),
 		'no_hp'=>set_value('no_hp'),
 		'id_pembei'=>set_value('id_pembei'),
 		'button'=>'Tambah',
 		'action'=>site_url('pembeli/tambah_aksi'),
 		);
 	$this->load->view('pembeli/pembeli_form',$data);

 		
} 
function tambah_aksi()
{
	$data= array(
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		'no_hp'=>$this->input->post('no_hp'),
		);
	$this->pembeli_models->tambah_data($data);
	redirect(site_url('pembeli'));
}
function delete($id)
{
	$this->pembeli_models->hapus_data($id);
	redirect(site_url('pembeli'));
}
function edit($id)
{
	$pbl=$this->pembeli_models->ambil_data_id($id);
	$data=array(
	    'id_pembeli'=>set_value('id_pembeli',$pbl->id_pembeli),
		'nama'=>set_value('nama',$pbl->nama),
 		'alamat'=>set_value('alamat',$pbl->alamat),
 		'no_hp'=>set_value('no_hp',$pbl->no_hp),
 		'button'=>'Edit',
 		'action'=>site_url('pembeli/edit_aksi'),
 		);
 	$this->load->view('pembeli/pembeli_form',$data);
		
}function edit_aksi()
{
$data=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'no_hp'=>$this->input->post('no_hp'),			
	);
	$id=$this->input->post('id_pembeli');
		$this->pembeli_models->edit_data($id,$data);
		redirect(site_url('pembeli'));
}}
 ?>