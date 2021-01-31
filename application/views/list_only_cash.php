<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Toko</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css"') ?> rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- =======================================================
  * Template Name: Squadfree - v2.2.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= base_url('')?>"><span>Pusat Oleh-Oleh Lampung </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('')?>">Home</a></li>
          <li class="drop-down"><a href="">WEBGIS PUSAT OLEH-OLEH LAMPUNG</a>
            <ul>
			  <li class="drop-down"><a href="#">Berdasarkan Pembayaran</a>
				<ul>
					<li><a href="<?= base_url('DaftarOnline')?>">Online</a></li>
					<li><a href="<?= base_url('DaftarCash')?>">Biasa</a></li>
					</ul>
			</li>
				
              <li class="drop-down"><a href="#">Berdasarkan Jenis Oleh-oleh</a>
                <ul>
                  <li><a href="<?= base_url('DaftarMakanan')?>">Makanan</a></li>
                  <li><a href="<?= base_url('DaftarMinuman')?>">Minuman</a></li>
                  <li><a href="<?= base_url('DaftarSuvenir')?>">Suvenir</a></li>
                  <li><a href="<?= base_url('DaftarPakaian')?>">Pakaian</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('Daftar')?>">Semua</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('Contact')?>">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- Awal List -->
<div class="clearfix"></div>
  <section class="search-box">
    <div class="container-fluid">
	    <div class="row">
      <div  class="col-sm-12 col-md-5 col-lg-5">
          <div class="col-md-12 listing-block">
            <ul class="list-group">
              <?php 
                $no = 1;
                foreach ($toko as $t){
                  $lt = str_replace(',','.',$t->lat);
                  $lg = str_replace(',','.',$t->long);
              ?>
              <li  class="list-group-item">
                <div class="row">
                    <div class="col-md-8">
                    <a href="#" data-toggle="modal" data-target="#modal_list<?= $t->UID ?>" >
                    <h4><?php echo "$no. $t->nmtoko"; ?></h4>
                    </a>
                    <h5><?= $t->alamat?></h5>
                    <p><?= $t->jadwal?></p>
                  </div> 
                  <img col='col-md-4' src="<?= base_url('assets/img/'.$t->pic) ?>" style="height:100px; width:auto;" alt=""> 
                  </div>
              </li>
            <?php $no++; } ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 map-box mx-0 px-0">
            <iframe width="100%" height="495" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/d/u/0/embed?mid=1i38WZdauP_TZA0BVYBYhKPFTfs38W14W"></iframe>
        </div>
	    </div>
    </div>
  </section>
</div>
<!-- Akhir List -->
  <!-- Modal List -->
  <?php foreach($toko as $t){ ?>
              <div class="modal fade bd-example-modal-lg" id="modal_list<?= $t->UID?>" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Toko</h5>
                      <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body centered center">
                      <form method="" >
                        <div class="pl-lg-4">
                          <div class="row">
                            <img src="<?= base_url('assets/img/'.$t->pic); ?>" alt="" style="width:20%;height:auto;" srcset="">
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-username">Nama Toko</label>
                                <input type="text" id="nama" readonly name="nama" class="form-control" value="<?= $t->nmtoko ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Alamat</label>
                                <input type="text" id="input-first-name" readonly name="alamat" class="form-control" value="<?= $t->alamat ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Jadwal</label>
                                <input type="text" id="input-first-name" readonly name="jadwal" class="form-control" value="<?= $t->jadwal ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Website</label>
                                <input type="text" id="input-first-name" readonly name="website" class="form-control" value="<?= $t->web ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Contact</label>
                                <input type="text" id="input-first-name" readonly name="kontak" class="form-control" value="<?= $t->cp ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Metode Pembayaran</label>
                                <input type="text" id="input-first-name" readonly name="metode" class="form-control" value="<?= $t->bayar ?>" >
                                <br>
                                <label class="form-control-label" for="input-first-name">Jenis Oleh-oleh</label>
                                <input type="text" id="input-first-name" readonly name="jenis" class="form-control" value="<?= $t->jenis ?>" >
                                <br>
                                <p><?= $t->deskripsi ?></p>
                                <br>
                                <a href="https://www.google.com/maps/dir/<?= $lt ?>,<?= $lg ?>" target="_blank">Lihat Peta </a>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
  <!-- Akhir Modal List -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>Pusat Oleh-oleh Lampung</h3>
              <p>
                <strong>Phone:</strong> +62 812 4566 8277<br>
                <strong>Email:</strong> bangun.frederick@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://web.facebook.com/DdaviinN/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/davinfrederick/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script>
        $(function(){
        $('.listing-block').slimScroll({
            height: '500px'
        });
    });
    </script>

</body>

</html>