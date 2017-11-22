<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');
 ?>
<div class="row">
<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
<?php echo anchor(site_url("produk/tambah"),"Tambah data",'class="btn btn-primary"'); ?>
</div>
</div>
<div class="row">
 <table id="example" class="table table-striped table-bordered">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nama Produk</th>
 			<th>Jenis Produk</th>
 			<th>Variant Rasa</th>
 			<?php if($status == 'admin') { ?>
 			<th>Aksi</th>
 			<?php } ?>
 		
 		</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($produk as $key => $value) {?>
 				<tr>
 				<td><?php echo $value->id_produk; ?></td>
 				<td><?php echo $value->nama_produk; ?></td> 	
 				<td><?php echo $value->jenis_produk; ?></td>	
 				<td><?php echo $value->variant_rasa; ?></td>
 				<?php if($status == 'admin') { ?>
 				<td>
 				<?php echo anchor(site_url('produk/edit/'.$value->id_produk),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('produk/delete/'.$value->id_produk),
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