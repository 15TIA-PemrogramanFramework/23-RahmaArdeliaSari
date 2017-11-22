<?php

class cabang_models extends CI_model{
public $nama_table = 'cabang';
public $id = 'id_cabang';
public $order = 'DESC';
function __constructor()
	{
	parent::__constructor();
	}
	function ambil_data(){
	$this->db->order_by($this->id,$this->order);
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
	}

	function cek_login($username, $password){
		$this->db->where('nama_cabang',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
}}
	
	?>