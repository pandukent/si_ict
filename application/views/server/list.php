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
          <a class="navbar-brand" href="">Data Server</a>
        </div>
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Server</li>
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
                <h4 class="card-title">Data Server</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <?php if ($this->session->userdata('akses_level') == "Admin" or $this->session->userdata('akses_level') == "Pegawai") { ?>

                    <a href="<?php echo base_url('server/tambah') ?>" title="Tambah Server" class="btn btn-primary">Tambah Server
                      <div class="ripple-container"></div>
                    </a>
                  <?php } ?>
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>ID Server</th>
                        <th>Nama Server</th>
                        <th>Jenis</th>
                        <th>Merk</th>
                        <th>Tanggal Pasang</th>
                        <th width="12%" class="disabled-sorting text-right">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($server as $server) {
                        if ($server->id_server != 00) {  ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><span class="badge badge-default"><?php echo $server->id_server ?></span></td>
                            <td><?php echo $server->nama_server ?></td>
                            <td><?php echo $server->jenis_barang ?></td>
                            <td><?php echo $server->merk_barang ?></td>
                            <td><?php echo $server->tanggal_pasang ?></td>
                            <td>
                              <a href="<?php echo base_url('server/edit/' . $server->id_server) ?>" title="" class="btn btn-warning btn-sm btn-round btn-fab">
                                <i class="fa fa-edit"></i>
                              </a>

                              <?php
                              //link delete
                              include('delete.php');
                              ?>
                              <?php if ($server->nickname != null){ ?>
                              <a href="<?php echo base_url('server/detail/' . $server->id_server) ?>" title="" class="btn btn-success btn-sm btn-round btn-fab">
                                <i class="material-icons">info</i>
                              </a>
                              <?php }
                              elseif ($server->nickname == null){
                              ?>
                               <a href="" class="btn btn-success btn-sm btn-round btn-fab" data-toggle="modal" data-target="#errdetail">
                                <i class="material-icons">info</i>
                              </a>
                              <?php } ?>
                              <div class="modal fade" id="errdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Perangkat belum dimasukkan kedalam pemantauan NAGIOS Server
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
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