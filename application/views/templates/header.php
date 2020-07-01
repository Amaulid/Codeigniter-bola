<!DOCTYPE html>
<html lang="en">

<head>
  <title>Centro Futsal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">
  <link href="<?= base_url() ?>assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="<?= base_url('kontak') ?>" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Ada Pertanyaan?</a> 
            <a class="small mr-3"><span class="icon-phone2 mr-2"></span> 085778803203</a> 
            <a class="small mr-3"><span class="icon-envelope-o mr-2"></span> amaulid65@gmail.com</a> 
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="<?= base_url('dashboard') ?>" class="d-block">
              <img src="<?= base_url() ?>assets/images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="<?= base_url('dashboard') ?>" class="nav-link text-left">Home</a>
                </li>

                
   
                <li>
                  <a href="<?= base_url('pemesanan') ?>" class="nav-link text-left">Booking</a>
                </li>

                <li>
                  <a href="<?= base_url('data_bookingan_member') ?>" class="nav-link text-left">Info Booking</a>
                </li>
            
                <li>
                  <div class="topbar-divider d-none d-sm-block"></div>
                <ul class="na navbar-nav navbar-right">
                 <?php if($this->session->userdata('username')) { ?>
                   <li><div></div><div>
                 <?php echo anchor('auth/logout','Logout') ?></li></div></li>
              <?php } else { ?>
                   <li><?php echo anchor('auth/login','Login'); ?></li>

              <?php } ?> 

            </ul>

          </ul>

        </nav>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </header>

    
