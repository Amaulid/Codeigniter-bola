<div class="container-fluid">
	<h4>Data User</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id user</th>
			<th>Nama User</th>
			<th>Username</th>
			<th>Email</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php foreach($user as $usr){ ?>
		<tr>
			<td><?php echo $usr->id ?></td>
			<td><?php echo $usr->nama ?></td>
			<td><?php echo $usr->username ?></td>
			<td><?php echo $usr->email ?></td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/user/hapus/' .$usr->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>	
			</td>
		</tr>

	<?php } ?>
	</table>
	
</div>