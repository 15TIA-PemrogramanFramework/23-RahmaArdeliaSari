<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
	<label>Nama Cabang</label>
	<input type="text" placeholder="Masukan nama cabang" value="<?php echo $nama_cabang; ?>" class="form-control" name="nama_cabang">
	</div>

	<div class="form-group">
	<label>Password</label>
	<input type="text" placeholder="Masukan password" value="<?php echo $password; ?>" class="form-control" name="password">
	</div>

	<div class="form-group">
	<label>Alamat Cabang</label>
	<input type="text" placeholder="Masukan alamat cabang" value="<?php echo $alamat_cabang; ?>" class="form-control" name="alamat_cabang">
	</div>



	<input type="hidden" name="id_cabang" value="<?php echo $id_cabang; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('cabang')  ?>" class="btn btn-default">Cancel
	</a>
</form>
<?php $this->load->view('templates/footer') ?>