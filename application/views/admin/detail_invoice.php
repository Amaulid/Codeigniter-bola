<div class="container-fluid">
	<h4>Detail Pesanan<div class="btn btn-sm btn-success">No. dtloice : <?php echo $dtloice->id_konfirm ?></div></h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>LAPANGAN</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUB-TOTAL</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($detail as $dtl) :
		?>

		<tr>
			<td><?php echo $dtl->nama ?></td>
			<td><?php echo $dtl->id_jam ?></td>
			<td><?php echo $dtl->tgl_jadwal ?></td>
			<td><?php echo $dtl->id_lapang ?></td>
			<td><?php echo $dtl->notelp ?></td>
			<td><?php echo number_format($dtl->harga,0,',','.') ?></td>
			<td><?php echo number_format($subtotal,0,',','.') ?></td>
		</tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.')  ?></td>
		</tr>

	</table>
	<a href="<?php echo base_url('admin/dtloice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>