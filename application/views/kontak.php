<br><br><br>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/lp3.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">KONTAK KAMI</h2>
            </div>
          </div>
        </div>
      </div>

     <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="<?= base_url('dashboard') ?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Kontak Kami</span>
      </div>
    </div>


<br><br><br><br>
			
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
                    <h1 class="h4 text-gray-900 mb-4">Kontak Kami</h1>
                  </div>
                  <hr>

                   <?php echo $this->session->flashdata('msg');?>

                  <form method="post" action="<?php echo base_url('kontak/tambah_aksi') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail"  placeholder="Masukan Nama Anda" name="nama">
                      <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan email Anda" name="email">
                      <?php echo form_error('email','<div class="text-danger small ml-2">','</div>') ?>
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" cols="30" rows="7" name="pesan"></textarea>
                      <?php echo form_error('pesan','<div class="text-danger small ml-2">','</div>') ?>
                    </div>

                    <button type="submit" class="btn btn-primary form-control">Kirim</button>
                  
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




<br><br><br><br><br>