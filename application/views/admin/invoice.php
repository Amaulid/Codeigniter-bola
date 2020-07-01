<div class="container-fluid">
	<h4>Invoice pembayaran</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Harga</th>
			<th>Bukti Bayar</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php foreach($invoice as $inv){ ?>
		<tr>
			<td><?php echo $inv->id_konfirm ?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->harga ?></td>
			<td><?php echo $inv->gambar ?></td>
			<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat_gambar" id="<?php echo $inv->id_konfirm ?>">
  Lihat
</button></td>
			<td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/invoice/hapus/' .$inv->id_konfirm, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>	
			</td>
		</tr>

	<?php } ?>
	</table>
	
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="lihat_gambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">No Invoice : <td><?php echo $inv->id_konfirm ?></td></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      	<img src="<?php echo base_url().'/upload/'.$inv->gambar ?>" class="card-img-top" alt="...">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>