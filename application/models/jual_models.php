<?php

class jual_models extends CI_model{
public $nama_table = 'jual';
public $id_jual = 'id_jual';
public $order = 'DESC';
function __constructor()
	{
	parent::__constructor();
	}


	
	function ambil_data(){
	$this->db->distinct();
 		$this->db->select('j.id_jual, j.tanggal, j.jumlah, j.harga, j.total,j.id_produk,j.id_cabang,p.jenis_produk, p.variant_rasa, c.nama_cabang');
 		$this->db->from('jual j');
 		$this->db->join('produk p', 'p.id_produk = j.id_produk');
 		$this->db->join('cabang c', 'c.id_cabang = j.id_cabang');
 		return $this->db->get($this->nama_table)->result();
		}
function ambil_data_id($id){
		$this->db->where($this->id_jual,$id);
		return $this->db->get($this->nama_table)->row();
	}
	function tambah_data($data){
		$this->db->insert($this->nama_table,$data);
		return $this->db->get($this->nama_table)->result();
	}

	function hapus_data($id){
		$this->db->where($this->id_jual,$id);
		$this->db->delete($this->nama_table);
	}
	function edit_data($id,$data){
		$this->db->where($this->id_jual,$id);
		$this->db->update($this->nama_table,$data);
	}
	function edit_data_id($id){
		$this->db->where($this->id_jual,$id);
		return $this->db->get($this->nama_table)->row();
	}}
	
	?>