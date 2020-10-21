    <!-- Navbar Mulai -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
              <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
              <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
            </button>
          </div>
          <a class="navbar-brand" href="">Semua Barang</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Semua Barang</li>
        </ol>
      </div>
      <br>
    </nav>
    <!-- Navbar Selesai -->

    <div class="content">
      <div class="container-fluid">
        <?php
        //notifikasi
        if ($this->session->flashdata('sukses')) {
          echo '<div class="alert alert-success">';
          echo $this->session->flashdata('sukses');
          echo '</div>';
        }
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Data Semua Barang</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                <button type="button" class="btn btn-info" data-toggle="popover" data-container="body" data-original-title="Keterangan" data-content="Perangkat dengan kondisi critical ditandai dengan warna merah dan Perangkat dengan kondisi warning ditandai dengan warna kuning." data-color="primary">Info</button><a>
            <form  action="<?php echo base_url('sembarpdf') ?>" method="post" target="_blank">
              <!-- <input type="hidden" name="keyword" value="<?php echo $mailbox->id_mailbox ?>"> -->
              <input class="btn btn-primary" type="submit" name="Search" value="Cetak" />
            </form><br>
          </a>
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Tanggal Pasang</th>
                        <th>Tanggal Habis</th>
                        <th>Sisa Usia(Bulan)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($sembar as $sembar) {
                        if ($sembar->id_barang != 00) {  ?>
                          <tr class="<?php if ($sembar->sisa_usia_bulan <= 12) {
                                            echo "table-danger";
                                          } else if ($sembar->sisa_usia_bulan <= 18) {
                                            echo "table-warning";
                                          } ?>">

                            <td><?php echo $i ?></td>
                            <td><span class="badge badge-default"><?php echo $sembar->id_barang ?></span></td>
                            <td><?php echo $sembar->nama_barang ?></td>
                            <td><?php echo $sembar->jenis_barang ?></td>
                            <td><?php echo $sembar->merk_barang ?></td>
                            <td><?php echo $sembar->tanggal_pasang ?></td>
                            <td><?php echo $sembar->tanggal_habis ?></td>
                            <td name="bulan"><?php echo (round($sembar->sisa_usia_bulan, 2)) ?></td>
                          </tr>
                      <?php $i++;
                        }
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- Content Wrapper. Contains page content -->