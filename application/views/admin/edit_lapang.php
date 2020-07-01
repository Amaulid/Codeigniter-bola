<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA LAPANGAN</h3>

	<?php foreach($lapang as $lpg) : ?>

	<form method="post" action="<?php echo base_url().'admin/data_lapang/update' ?>">

				<div class="for-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?php echo $lpg->keterangan ?>">
		</div>
		
				<div class="for-group">
			<label>Harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $lpg->harga ?>">
		</div>
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3 mr-3 ">Simpan</button>
	</form>

	<?php endforeach; ?>
	
</div>