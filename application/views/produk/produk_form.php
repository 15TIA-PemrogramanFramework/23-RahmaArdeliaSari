<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
	<label>Nama Produk</label>
	<input type="text" placeholder="Masukan nama produk" value="<?php echo $nama_produk; ?>"  class="form-control" name="nama_produk">
	</div>

	<div class="form-group">
	<label>Jenis Produk</label>
	<input type="text" placeholder="Masukan Jenis Produk" value="<?php echo $jenis_produk; ?>" class="form-control" name="jenis_produk">
	</div>

	<div class="form-group">
	<label>Variant Rasa</label>
	<input type="text"  placeholder="Masukan variant rasa"  value="<?php echo $variant_rasa; ?>" class="form-control" name="variant_rasa">
	</div>

	<input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pembeli')  ?>" class="btn btn-default">Cancel
	</a>
</form>
<?php $this->load->view('templates/footer') ?>