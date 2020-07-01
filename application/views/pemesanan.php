<br><br><br>
<br>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/lp3.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">FORM BOOKING</h2>
            </div>
          </div>
        </div>
      </div>

     <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?= base_url('dashboard') ?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Booking</span>
      </div>
    </div>
<br><br>

<div class="col-xl col-lg-12 col-md-9">
<center></center>
</div>
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silakan isi data Penyewaan</h1>
                  </div> 
                  <?php echo $this->session->flashdata('msg');?>
                  <hr>
                  <form method="post" action="<?php echo base_url('pemesanan/tambah_aksi') ?>" class="user">
                    <div class="form-group">
                    	<label>Nama Lengkap</label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="nama" value="<?php echo $this->session->userdata('username') ?>" readonly>
                       <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                     </div>

				     <div class="form-group">
				     	<label>Pilih Jam</label><br>
                      <select class="form-control" name="id_jam">
                    <option>08:00 - 09:00</option>
          					<option>09:00 - 10:00</option>
          					<option>10:00 - 11:00</option>
          					<option>11:00 - 12:00</option>
          					<option>12:00 - 13:00</option>
          					<option>13:00 - 14:00</option>
          					<option>14:00 - 15:00</option>
          					<option>15:00 - 16:00</option>
          					<option>16:00 - 17:00</option>
          					<option>17:00 - 18:00</option>
          					<option>18:00 - 19:00</option>
          					<option>19:00 - 20:00</option>
          					<option>20:00 - 21:00</option>
          					<option>21:00 - 22:00</option>
          					<option>22:00 - 23:00</option>
                      </select>
                      <?php echo form_error('id_jam','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Tanggal" name="tgl_jadwal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>">
                </div>

				     <div class="form-group">
				     	<label>Pilih Lapangan</label><br>
				     	<select class="form-control" name="id_lapang">
				     		<option>Lapangan A</option>
				     		<option>Lapangan B</option>
				     	</select>
				    </div>

            <div class="form-group">
                      <label>No HP</label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="notelp" placeholder="Masukan No HP Anda">
                       <?php echo form_error('notelp','<div class="text-danger small ml-2">','</div>') ?>
                     </div>
				    
				    <hr>

                    <button type="submit" class="btn btn-primary form-control" >Booking</button>
                    <button type="reset" class="btn btn-danger form-control">Close</button>


                  
                  </form>



                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<br><br><br><br><br><br><br>