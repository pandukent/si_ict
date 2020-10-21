<?php
//proteksi halaman
$this->check_login->check(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/dist/img/iconnn.ico">
  <link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>/assets/dist/img/iconnn.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SI Inventaris Pusat Data
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/dist/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" />
</head>

<?php
// ambil data user berdasarkan data login

$id_user     = $this->session->userdata('id_user');
$user_aktif  = $this->user_model->detail($id_user);
?>
<!-- Sidebar Mulai -->

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="<?php echo base_url(); ?>/assets/dist/img/sidebar-1.jpg">
      <div class="logo">
        <a href="<?php echo base_url('dashboard'); ?>" class="simple-text logo-mini">
          si
        </a>
        <a href="<?php echo base_url('dashboard'); ?>" class="simple-text logo-normal">
          SI Inventaris
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="<?php echo base_url(); ?>/assets/dist/img/fotoprofil.jpg" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo $user_aktif->nama ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
                    <span class="sidebar-mini"> L </span>
                    <span class="sidebar-normal"> Log Out </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p> Beranda </p>
            </a>
          </li>
          <?php if ($this->session->userdata('akses_level') == "Admin" or $this->session->userdata('akses_level') == "Pegawai") { ?>

            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('nagios'); ?>">
                <!-- <a class="nav-link" href="http://192.168.1.68/nagios/cgi-bin/status.cgi?hostgroup=all&style=hostdetail" target="_blank"> -->
                <i class="material-icons">timeline</i>
                <p> NAGIOS </p>
              </a>
            </li>
            <li class="treeview">
              <a class="nav-link" data-toggle="collapse" href="#dataBarang">
                <i class="fa fa-archive"></i>
                <p> Barang
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="dataBarang">
                <ul class="nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('server') ?>">
                      <i class="material-icons">storage</i>
                      <span class="sidebar-normal"> Data Server </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('barlai') ?>">
                      <i class="material-icons">folder</i>
                      <span class="sidebar-normal"> Data Barang Lainnya </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('sembar') ?>">
                      <i class="material-icons">apps</i>
                      <span class="sidebar-normal"> Data Semua Barang </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('request/detail'); ?>">
                <i class="material-icons">list</i>
                <p> Pengajuan Pembaruan </p>
              </a>
            </li>
          <?php } ?>



          <?php if ($this->session->userdata('akses_level') == "Admin") { ?>
            <li class="treeview">
              <a class="nav-link" data-toggle="collapse" href="#dataMaster">
                <i class="material-icons">image</i>
                <p> Master Data
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="dataMaster">
                <ul class="nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('jenis') ?>">
                      <span class="sidebar-mini"> JB </span>
                      <span class="sidebar-normal"> Jenis Barang </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('merk') ?>">
                      <span class="sidebar-mini"> MB </span>
                      <span class="sidebar-normal"> Merk Barang </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('user'); ?>">
                <i class="material-icons">lock</i>
                <p> User Administrator </p>
              </a>
            </li>
          <?php } ?>

          <?php if ($this->session->userdata('akses_level') == "Pimpinan") { ?>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('request'); ?>">
                <i class="fa fa-check"></i>
                <p> Validasi Pembaruan</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('sembar'); ?>">
                <i class="material-icons">apps</i>
                <p> Semua Barang </p>
              </a>
            </li>
          <?php } ?>


        </ul>
      </div>
    </div>
    <!-- Sidebar Selesai -->
    <div class="main-panel">


      <!-- Navbar Mulai -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              
            </div>
            
          </div>
          <ol class="breadcrumb justify-content-end">
          <a href="<?php echo base_url('server') ?>" title="" class="btn btn-sm  btn-round fa fa-close">
              </a>
          </ol>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- Navbar Selesai -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <iframe src="http://192.168.1.100/nagios/cgi-bin/status.cgi?host=<?php echo $server->nickname ?>" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
          </div>
        </div>
      </div>

     
      <!--   Core JS Files   -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/core/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/dist/js/core/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/dist/js/core/bootstrap-material-design.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!-- Plugin for the momentJs  -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/moment.min.js"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/sweetalert2.js"></script>
      <!-- Forms Validations Plugin -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/jquery.validate.min.js"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/jquery.bootstrap-wizard.js"></script>
      <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/bootstrap-selectpicker.js"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/bootstrap-datetimepicker.min.js"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/jquery.dataTables.min.js"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/bootstrap-tagsinput.js"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/jasny-bootstrap.min.js"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/fullcalendar.min.js"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/jquery-jvectormap.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/nouislider.min.js"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- Library for adding dinamically elements -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/arrive.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Chartist JS -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/chartist.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="<?php echo base_url(); ?>/assets/dist/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
      <?php
      include('corejs.php');
      ?>
</body>

</html>