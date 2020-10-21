<?php 
// ambil data user berdasarkan data login

$id_user     = $this->session->userdata('id_user');
$user_aktif  = $this->user_model->detail($id_user);
 ?>
<!-- Sidebar Mulai -->
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="<?php echo base_url();?>/assets/dist/img/sidebar-1.jpg">
      <div class="logo">
        <a href="<?php echo base_url ('dashboard'); ?>" class="simple-text logo-mini">
          si
        </a>
        <a href="<?php echo base_url ('dashboard'); ?>" class="simple-text logo-normal">
          SI Inventaris
        </a>
      </div>
      <div class="sidebar-wrapper">
      <div class="user">
          <div class="photo">
            <img src="<?php echo base_url();?>/assets/dist/img/fotoprofil.jpg" />
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
                  <a class="nav-link" href="<?php echo base_url('login/logout')?>">
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
            <a class="nav-link" href="<?php echo base_url ('dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p> Beranda </p>
            </a>
          </li>
          <?php if ($this->session->userdata('akses_level') == "Admin" or $this->session->userdata('akses_level') == "Pegawai") { ?>
      
            <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url ('nagios'); ?>">
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
            <a class="nav-link" href="<?php echo base_url ('request/detail'); ?>">
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
            <a class="nav-link" href="<?php echo base_url ('user'); ?>">
              <i class="material-icons">lock</i>
              <p> User Administrator </p>
            </a>
          </li>
       <?php } ?>

       <?php if ($this->session->userdata('akses_level') == "Pimpinan") { ?>
        <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url ('request'); ?>">
            <i class="fa fa-check"></i>
              <p> Validasi Pembaruan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url ('sembar'); ?>">
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
   
      
   