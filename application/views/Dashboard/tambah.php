<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/dashboard')?>/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard')?>/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="<?= base_url() ?>/dashboard/dashboard">
          <img src="<?= base_url('assets/dashboard') ?>/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>/dashboard/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Daftar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>/dashboard/tambah">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Tambah</span>
              </a>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <!-- Header -->
    <!-- Header -->
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Tambah Toko</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Toko</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Masukkan Nama Toko" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Alamat</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan Alamat Toko" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Jadwal</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan Jadwal Toko" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Website</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan nama website" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Contact</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan kontak toko" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Metode Pembayaran</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan metode pembayaran yang digunakan" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Jenis Oleh-oleh</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan jenis oleh-oleh yang digunakan" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Latitude</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan titik latitude" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name">Longitude</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukkan titik longitude" value="">
                        <br>
                        <label class="form-control-label" for="input-first-name"> Masukkan Gambar Toko</label>
                        <input type="file" name="" id="" class="btn btn-secondary">
                        <br>
                        <br>
                        <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="masukkan deskripsi"></textarea>
                        <br>
                        <input type="button" value="submit" class="btn btn-primary">
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
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('assets/dashboard')?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('assets/dashboard')?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>