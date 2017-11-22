<?php 
/**
 * 
 */
 class jual extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('jual_models');
 		$this->load->model('cabang_models');
 		$this->load->model('produk_models');
 	}
 	function index()
 	{
 		$data['jual']=$this->jual_models->ambil_data();
 		$this->load->view('jual/jual_list',$data);
 	}
 	function tambah(){

 	$data= array(
 		'id_produk'=>set_value('id_produk'),
 		'id_cabang'=>set_value('id_cabang'),
 		'tanggal'=>set_value('tanggal'),
 		'jumlah'=>set_value('jumlah'),
 		'harga'=>set_value('harga'),
 		'total'=>set_value('total'),
 		'id_jual'=>set_value('id_jual'),
 		'produk' => $this->produk_models->ambil_data(),
 		'cabang' => $this->cabang_models->ambil_data(),
 		'button'=>'Tambah',
 		'action'=>site_url('jual/tambah_aksi'),
 		);
 	$this->load->view('jual/jual_form',$data);
 

 		
} 
function tambah_aksi()
{
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');
    $total = $jumlah * $harga;
	$data= array(
		'id_produk'=>$this->input->post('id_produk'),
		'id_cabang'=>$this->input->post('id_cabang'),
		'tanggal'=>$this->input->post('tanggal'),
		'jumlah'=>$this->input->post('jumlah'),
		'harga'=>$this->input->post('harga'),
		'total'=>$total,
		);
	$this->jual_models->tambah_data($data);
	redirect(site_url('jual'));
}
function delete($id)
{
	$this->jual_models->hapus_data($id);
	redirect(site_url('jual'));
}
function edit($id)
{
	$pbl=$this->jual_models->ambil_data_id($id);
	$data=array(
		'id_produk'=>set_value('id_produk',$pbl->id_produk),
 		'id_cabang'=>set_value('id_cabang',$pbl->id_cabang),
 		'tanggal'=>set_value('tanggal',$pbl->tanggal),
 		'jumlah'=>set_value('jumlah',$pbl->jumlah),
 		'harga'=>set_value('harga',$pbl->harga),
 		'total'=>set_value('total',$pbl->total),
 		'id_jual'=>set_value('id',$pbl->id_jual),
 		'produk' => $this->produk_models->ambil_data(),
 		'cabang' => $this->cabang_models->ambil_data(),
 		'button'=>'Edit',
 		'action'=>site_url('jual/edit_aksi'),
 		);
 	$this->load->view('jual/jual_form',$data);
		
}function edit_aksi()
{
    $jumlah = $this->input->post('jumlah');
    $harga = $this->input->post('harga');
    $total = $jumlah * $harga;
$data=array(
			'id_produk'=>$this->input->post('id_produk'),
			'id_cabang'=>$this->input->post('id_cabang'),
			'tanggal'=>$this->input->post('tanggal'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'total'=>$total,


			
	);
	$id=$this->input->post('id_jual');
		$this->jual_models->edit_data($id,$data);
		redirect(site_url('jual'));
}}
 ?>