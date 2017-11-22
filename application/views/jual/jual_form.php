<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
	<label>ID Produk</label>
	<select class="form-control select2" name="id_produk" id="produk">
		<?php foreach ($produk as $key => $value) { ?>
			<option value="<?php echo $value->id_produk; ?>;"><?php echo $value->id_produk;?></option>
			<?php } ?>
	</select>
	</div>

	<div class="form-group">
	<label>ID Cabang</label>
	<select class="form-control select2" name="id_cabang" id="cabang">
		<?php foreach ($cabang as $key => $value) { ?>
			<option value="<?php echo $value->id_cabang; ?>;"><?php echo $value->id_cabang;?></option>
			<?php } ?>
	</select>
	</div>

	<div class="form-group">
	<label>Tanggal</label>
	<input type="date" placeholder="Masukan username" value="<?php echo $tanggal; ?>" class="form-control" name="tanggal">
	</div>

	<div class="form-group">
	<label>Jumlah</label>
	<input type="text" placeholder="Masukan jumlah" value="<?php echo $jumlah; ?>" class="form-control" name="jumlah">
	</div>

	<div class="form-group">
	<label>Harga</label>
	<input type="text" placeholder="Masukan Harga" value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>

	
	<input type="hidden" name="id_jual" value="<?php echo $id_jual; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('jual')  ?>" class="btn btn-default">Cancel
	</a>
</form>
<?php $this->load->view('templates/footer') ?>