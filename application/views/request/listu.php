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
          <a class="navbar-brand" href="">Pengajuan Pengadaan Perangkat</a>
        </div>
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
                <h4 class="card-title">Pengajuan Pengadaan Perangkat</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <a>
                    <form action="<?php echo base_url('userpdf') ?>" method="post" target="_blank">
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
                        <th width="7%">ID Request</th>
                        <th>ID Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Nama Barang</th>
                        <th>Status Validasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($request as $request) {
                        if ($request->id_request != 00) {  ?>
                          <tr>
                            <td><span class="badge badge-default"><?php echo $request->id_request ?></span></td>
                            <td><?php echo $request->id_barang ?></td>
                            <td><?php echo $request->jenis_barang ?></td>
                            <td><?php echo $request->merk_barang ?></td>
                            <td><?php echo $request->nama_barang ?></td>
                            <td>
                              <?php if ($request->validasi == "belum") { ?>
                                <span class="badge badge-default">Menunggu Disetujui</span>

                              <?php } else if ($request->validasi == "no") { ?>
                                <span class="badge badge-danger">Tidak Disetujui</span>

                              <?php } else if ($request->validasi == "yes") { ?>
                                <span class="badge badge-success">Sudah Disetujui</span>
                              <?php } ?>
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