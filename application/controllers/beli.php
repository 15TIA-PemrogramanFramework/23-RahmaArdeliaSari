<?php 
/**
 * 
 */
 class beli extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('beli_models');
 		$this->load->model('pembeli_models');
 		$this->load->model('produk_models');
 	}
 	function index()
 	{
 		$data['beli']=$this->beli_models->ambil_data();
 		$this->load->view('beli/beli_list',$data);
 	}
 	function tambah(){

 	$data= array(
 		'id_produk'=>set_value('id_produk'),
 		'id_pembeli'=>set_value('id_pembeli'),
 		'tanggal'=>set_value('tanggal'),
 		'jumlah'=>set_value('jumlah'),
 		'harga'=>set_value('harga'),
 		'total_harga'=>set_value('total_harga'),
 		'id_beli'=>set_value('id_beli'),
 		'produk' => $this->produk_models->ambil_data(),
 		'pembeli' => $this->pembeli_models->ambil_data(),
 		'button'=>'Tambah',
 		'action'=>site_url('beli/tambah_aksi'),
 		);
 	$this->load->view('beli/beli_form',$data);

 		
} 
function tambah_aksi()
{
	$harga = $this->input->post('harga');
	$jumlah = $this->input->post('jumlah');
	$total_harga = $harga*$jumlah;
	$data= array(
		'id_produk'=>$this->input->post('id_produk'),
		'id_pembeli'=>$this->input->post('id_pembeli'),
		'tanggal'=>$this->input->post('tanggal'),
		'jumlah'=>$this->input->post('jumlah'),
		'harga'=>$this->input->post('harga'),
		'total_harga'=>$total_harga,
		);
	$this->beli_models->tambah_data($data);
	redirect(site_url('beli'));
}
function delete($id)
{
	$this->beli_models->hapus_data($id);
	redirect(site_url('beli'));
}
function edit($id)
{
	$pbl=($this->beli_models->ambil_data_id($id));
	$harga = $this->input->post('harga');
	$jumlah = $this->input->post('jumlah');
	$total_harga = $harga*$jumlah;
	$data=array(
		'id_produk'=>set_value('id_produk',$pbl->id_produk),
 		'id_pembeli'=>set_value('id_pembeli',$pbl->id_pembeli),
 		'tanggal'=>set_value('tanggal',$pbl->tanggal),
 		'jumlah'=>set_value('jumlah',$pbl->jumlah),
 		'harga'=>set_value('harga',$pbl->harga),
 		'total_harga'=>	$total_harga,
 		'id_beli'=>set_value('id_beli',$pbl->id_beli),
 		'produk' => $this->produk_models->ambil_data(),
 		'pembeli' => $this->pembeli_models->ambil_data(),
 		'button'=>'Edit',
 		'action'=>site_url('beli/edit_aksi'),
 		);
 	$this->load->view('beli/beli_form',$data);
		
}function edit_aksi()
{
    $harga = $this->input->post('harga');
	$jumlah = $this->input->post('jumlah');
	$total_harga = $harga*$jumlah;
    $data=array(
			'id_produk'=>$this->input->post('id_produk'),
			'id_pembeli'=>$this->input->post('id_pembeli'),
			'tanggal'=>$this->input->post('tanggal'),
			'jumlah'=>$this->input->post('jumlah'),
			'harga'=>$this->input->post('harga'),
			'total_harga'=>$total_harga,			
	);
	$id=$this->input->post('id_beli');
		$this->beli_models->edit_data($id,$data);
		redirect(site_url('beli'));
}}
 ?>