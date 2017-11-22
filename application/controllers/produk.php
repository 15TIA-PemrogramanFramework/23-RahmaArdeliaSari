<?php 
/**
 * 
 */
 class produk extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('produk_models');
 	}
 	function index()
 	{
 		$data['produk']=$this->produk_models->ambil_data();
 		$this->load->view('produk/produk_list',$data);
 	}
 	function tambah(){

 	$data= array(
 		'nama_produk'=>set_value('nama_produk'),
 		'jenis_produk'=>set_value('jenis_produk'),
 		'variant_rasa'=>set_value('variant_rasa'),
 		'id_produk'=>set_value('id_produk'),
 		'button'=>'Tambah',
 		'action'=>site_url('produk/tambah_aksi'),
 		);
 	$this->load->view('produk/produk_form',$data);

 		
} 
function tambah_aksi()
{
	$data= array(
		'nama_produk'=>$this->input->post('nama_produk'),
		'jenis_produk'=>$this->input->post('jenis_produk'),
		'variant_rasa'=>$this->input->post('variant_rasa'),
		);
	$this->produk_models->tambah_data($data);
	redirect(site_url('produk'));
}
function delete($id)
{
	$this->produk_models->hapus_data($id);
	redirect(site_url('produk'));
}
function edit($id)
{
	$pbl=$this->produk_models->ambil_data_id($id);
	$data=array(
		'nama_produk'=>set_value('nama_produk',$pbl->nama_produk),
 		'jenis_produk'=>set_value('jenis_produk',$pbl->jenis_produk),
 		'variant_rasa'=>set_value('variant_rasa',$pbl->variant_rasa),
 		'id_produk'=>set_value('id_produk',$pbl->id_produk),
 		'button'=>'Edit',
 		'action'=>site_url('produk/edit_aksi'),
 		);
 	$this->load->view('produk/produk_form',$data);
		
}function edit_aksi()
{
$data=array(
			'nama_produk'=>$this->input->post('nama_produk'),
			'jenis_produk'=>$this->input->post('jenis_produk'),
			'variant_rasa'=>$this->input->post('variant_rasa'),
			


			
	);
	$id=$this->input->post('id_produk');
		$this->produk_models->edit_data($id,$data);
		redirect(site_url('produk'));
}}
 ?>