<br><br><br><br><br><br>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/lp3.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">INFO BOOKING</h2>
            </div>
          </div>
        </div>
      </div>

     <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?= base_url('dashboard') ?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Info Booking</span>
      </div>
    </div>
<br>

<div class="container-fluid">
	<h2><center>Data Booking</center></h2><br>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jam</th>
			<th>Tanggal</th>
			<th>Lapangan</th>
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
		</tr>
		<?php } ?>
	</table>
</div>
<br><br><br>
</body>
</html>