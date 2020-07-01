<br><br><br><br><br>


<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/lp3.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">PROSES PEMBAYARAN</h2>
            </div>
          </div>
        </div>
      </div>

     <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?= base_url('dashboard') ?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Booking</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Proses Pembayaran</span>
      </div>
    </div>
<br><br>

<div class="container-fluid">

	<center>
	<strong>	
		<div class='alert alert-info'>Pesanan Anda sedang kami proses<br>Silahkan Lakukan Pembayaran.</div>
		<br><br>
    <img src="<?php echo base_url() ?>assets/images/logobni.png">
    <br><br>
    <h4>A/N CENTRO FUTSAL</h4>
    <h4>0568217258</h4>
    <h4>Rp.160000,-</h4>
 <br><br>
 <div class="container">
     <h4 align="center">SILAHKAN UPLOAD BUKTI PEMBAYARAN ANDA DISINI !</h4>
     <br><br>
<h1>Tambah Gambar</h1><hr>

<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("proses/tambah", array('enctype'=>'multipart/form-data')); ?>
  <table cellpadding="8">
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" value="<?php echo $this->session->userdata('username') ?>" readonly ?></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><input type="text" name="harga" value="160000" readonly></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><input type="file" name="input_gambar"></td>
    </tr>
  </table>
    
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
 </div>
</strong>
</center>
<br><br><br>


