<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('pembeli').'"><i class="fa fa-list fa-fw"></i> Pembeli</a>
	</li><li>
		<a href="'.site_url('beli').'"><i class="fa fa-list fa-fw"></i> Data Pembelian</a>
	</li><li>
		<a href="'.site_url('produk').'"><i class="fa fa-list fa-fw"></i> Produk </a>
	</li><li>
		<a href="'.site_url('jual').'"><i class="fa fa-list fa-fw"></i>Data Penjualan</a>
	</li><li>
		<a href="'.site_url('cabang').'"><i class="fa fa-list fa-fw"></i> Data Cabang</a>
	</li>';
	}
