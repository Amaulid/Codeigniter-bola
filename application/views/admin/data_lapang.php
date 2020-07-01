<div class="container-fluid">
	<h3><strong>Data Lapangan</strong></h3>
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>LAPANG</th>
			<th>KETERANGAN</th>
			<th>HARGA</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach($lapang as $lpg) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td>Lapangan <?php echo $lpg->id_lapang ?></td>
			<td><?php echo $lpg->keterangan ?></td>
			<td><?php echo $lpg->harga ?></td>
			<td><?php echo anchor('admin/data_lapang/edit/' .$lpg->id_lapang, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/data_lapang/hapus/' .$lpg->id_lapang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>	
		</tr>

		<?php endforeach; ?>

	</table>
</div>
