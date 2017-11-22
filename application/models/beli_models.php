<?php

class beli_models extends CI_model{
public $nama_table = 'beli';
public $id = 'id_beli';
public $order = 'DESC';
function __constructor()
	{
	parent::__constructor();
	}
	function ambil_data(){
	$this->db->distinct();
 		$this->db->select('b.id_beli, b.tanggal, b.jumlah, b.harga, b.total_harga,b.id_produk,b.id_pembeli,p.jenis_produk, p.variant_rasa, pmb.nama');
 		$this->db->from('beli b');
 		$this->db->join('produk p', 'p.id_produk = b.id_produk');
 		$this->db->join('pembeli pmb', 'pmb.id_pembeli = b.id_pembeli');
 		return $this->db->get($this->nama_table)->result();
	
		}
function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}
	function tambah_data($data){
		$this->db->insert($this->nama_table,$data);
		return $this->db->get($this->nama_table)->result();
	}

	function hapus_data($id){
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);
	}
	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}
	function edit_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}}
	
	?>