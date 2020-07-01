<br><br><br>
<br><br>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/lp3.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">INFO LAPANGAN</h2>
            </div>
          </div>
        </div>
      </div>

     <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?= base_url('dashboard') ?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Info Lapangan</span>
      </div>
    </div>
<br><br>

<center><strong><h1>INFO LAPANGAN</h1></strong></center>
<br><br>

<div class="row text-center mt-4">
	<?php 
		$no = 1;
		foreach($user as $u){ 
		?>

<div class="card ml-3 mb-5 mx-auto" style="width: 25rem;">
  <img src="<?= base_url().'/upload/'.$u->gambar ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lapang <?= $u->id_lapang ?></h5>
    <p class="card-text"><?= $u->keterangan ?></p>
    <p class="card-text">Rp. <?= $u->harga ?> .-/ Jam</p>
  </div>
</div>
<?php } ?>
</div>

<br><br><br>
