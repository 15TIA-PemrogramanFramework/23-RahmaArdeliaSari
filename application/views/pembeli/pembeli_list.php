<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');
 ?>
<div class="row">
<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
<?php echo anchor(site_url("pembeli/tambah"),"Tambah data",'class="btn btn-primary"'); ?>
</div>
</div>
<div class="row">
 <table id="example" class="table table-striped table-bordered">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nama</th>
 			<th>Alamat</th>
 			<th>No Hp</th>
 			<?php if($status == 'admin') { ?>
 			<th>Aksi</th>
 			<?php } ?>
 		</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($pembeli as $key => $value) {?>
 				<tr>
 				<td><?php echo $value->id_pembeli; ?></td>
 				<td><?php echo $value->nama; ?></td> 	
 				<td><?php echo $value->alamat; ?></td>	
 				<td><?php echo $value->no_hp; ?></td>	
 					<?php if($status == 'admin') { ?>
 				<td>
 				<?php echo anchor(site_url('pembeli/edit/'.$value->id_pembeli),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('pembeli/delete/'.$value->id_pembeli),
'<i class="fa fa-trash"></i>',
'class="btn btn-danger"'); ?>
</td>  <?php } ?>
 				</tr>
 				<?php } ?>
 		</tbody>
 </table>
</div>
<?php 
$this->load->view('templates/footer');
?>