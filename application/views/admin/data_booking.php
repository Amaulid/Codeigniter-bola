<div class="container-fluid">
	<h2><center>Data Booking</center></h2>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jam</th>
			<th>Tanggal</th>
			<th>Lapangan</th>
			<th>No HP</th>
			<th colspan="3">Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tb_pemesanan as $bk){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $bk->nama ?></td>
			<td><?php echo $bk->alamat ?></td>
			<td><?php echo $bk->id_jam ?></td>
			<td><?php echo $bk->tgl_jadwal ?></td>
			<td><?php echo $bk->id_lapang ?></td>
			<td><?php echo $bk->notelp ?></td>
				
			</td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/data_pembookingan/hapus/' .$bk->id_pemesanan, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>	
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>