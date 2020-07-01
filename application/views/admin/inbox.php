<div class="container-fluid">
<br>
	<h2><center>Pesan</center></h2>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Pesan</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->pesan ?></td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/inbox/hapus/' .$u->id_inbox, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>