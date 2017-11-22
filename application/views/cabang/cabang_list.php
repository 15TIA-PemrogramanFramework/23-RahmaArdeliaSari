<?php 
$this->load->view('templates/header');
$status = $this->session->userdata('status');
 ?>
<div class="row">
<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
<?php echo anchor(site_url("cabang/tambah"),"Tambah data",'class="btn btn-primary"'); ?>
</div>
</div>
<div class="row">
 <table id="example" class="table table-striped table-bordered">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nama Cabang</th>
 			<th>Password</th>
 			<th>Alamat Cabang</th>
 			<?php if($status == 'admin') { ?>
 			<th>Aksi</th>
 			<?php } ?>
 		</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($cabang as $key => $value) {?>
 				<tr>
 				<td><?php echo $value->id_cabang; ?></td>
 				<td><?php echo $value->nama_cabang; ?></td> 
 				<td><?php echo $value->password; ?></td> 	
 				<td><?php echo $value->alamat_cabang; ?></td>	
 				<?php if($status == 'admin') { ?>
 				<td>
 				<?php echo anchor(site_url('cabang/edit/'.$value->id_cabang),
						'<i class="fa fa-pencil"></i>',
						'class="btn btn-warning"'); ?>

<?php echo anchor(site_url('cabang/delete/'.$value->id_cabang),
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