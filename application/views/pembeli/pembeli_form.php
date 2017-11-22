<?php 
$this->load->view('templates/header');
 ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
	<label>Nama</label>
	<input type="text" placeholder="Masukan nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
	</div>

	<div class="form-group">
	<label>Alamat</label>
	<input type="text" placeholder="Masukan alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>

	<div class="form-group">
	<label>No HP</label>
	<input type="text" placeholder="Masukan No HP" value="<?php echo $no_hp; ?>" class="form-control" name="no_hp">
	</div>

	<input type="hidden" name="id_pembeli" value="<?php echo $id_pembeli; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pembeli')  ?>" class="btn btn-default">Cancel
	</a>
</form>
<?php $this->load->view('templates/footer') ?>