<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');
 ?>
<div class="row">
<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
<?php echo anchor(site_url("beli/tambah"),"Tambah data",'class="btn btn-primary"'); ?>
</div>
</div>
<div class="row">
 <table id="example" class="table table-striped table-bordered">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>ID Produk</th>
 			<th>Jenis Produk</th>
 			<th>Variant Rasa</th>
 			<th>ID Pembeli</th>
 			<th>Nama Pembeli</th>
 			<th>Tanggal</th>
 			<th>Jumlah</th>
 			<th>Harga</th>
 			<th>Total Harga Pembelian</th>
 			<?php if($status == 'admin') { ?>
 			<th>Aksi</th>
 			<?php } ?>
 		</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($beli as $key => $value) {?>
 				<tr>
 				<td><?php echo $key+1; ?></td>
 				<td><?php echo $value->id_produk; ?></td> 
 				<td><?php echo $value->jenis_produk; ?></td>
 				<td><?php echo $value->variant_rasa; ?></td>	
 				<td><?php echo $value->id_pembeli; ?></td>	
 				<td><?php echo $value->nama; ?></td>	
 				<td><?php echo $value->tanggal; ?></td>
 				<td><?php echo $value->jumlah; ?></td>
 				<td><?php echo $value->harga; ?></td>	
 				<td><?php echo $value->total_harga; ?></td>
 				<?php if($status == 'admin') { ?>
 				<td>
 				<?php echo anchor(site_url('beli/edit/'.$value->id_beli),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('beli/delete/'.$value->id_beli),
'<i class="fa fa-trash"></i>',
'class="btn btn-danger"'); ?>
</td> <?php } ?>
 				</tr>
 				<?php } ?>
 		</tbody>
 </table>
</div>
<?php 
$this->load->view('templates/footer');
?>