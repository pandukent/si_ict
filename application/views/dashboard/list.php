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
          <a class="navbar-brand" href="">Dashboard
          </a>
        </div>
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-dashboard"></i> Dashboard</li>
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
        <div class="header text-center">
          <h2 class="title">Selamat Datang di Sistem Informasi Inventarisasi Perangkat Keras ICT Universitas Diponegoro</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">notification_important</i>
                </div>
                <p class="card-category">Jumlah Perangkat Dengan Usia Manfaat Tersisa Kurang dari 12 Bulan</p>
                <h3 class="card-title"><?php
                                        $count_usia_warn = $this->db->query("SELECT COUNT(sisa_usia_bulan) as sisa
              FROM sembar_fix
              WHERE sisa_usia_bulan >= 0 AND sisa_usia_bulan <= 12");
                                        foreach ($count_usia_warn->result() as $row) {
                                          echo $row->sisa;
                                        }
                                        ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">

                  <a href="" data-toggle="modal" data-target="#danger"><label>Lihat Perangkat yang Termasuk</label>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">warning</i>
                </div>
                <p class="card-category">Jumlah Perangkat Dengan Usia Manfaat Tersisa 12 Bulan s/d 18 Bulan</p>
                <h3 class="card-title"><?php
                                        $count_usia_warn = $this->db->query("SELECT COUNT(sisa_usia_bulan) as sisa
              FROM sembar_fix
              WHERE sisa_usia_bulan > 12 AND sisa_usia_bulan <=18");
                                        foreach ($count_usia_warn->result() as $row) {
                                          echo $row->sisa;
                                        }
                                        ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">

                  <a href="" data-toggle="modal" data-target="#warning"><label>Lihat Perangkat yang Termasuk</label>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="danger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah Perangkat Dengan Usia Manfaat Tersisa Kurang dari 12 Bulan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">
              
                <div class="material-datatables">
                <div class="col-md-6">
                <div class="card card-chart">
                  <div class="card-body">
                    <p class="card-category">Klik  tombol biru untuk pengajuan pengadaan perangkat baru kepada pimpinan</p>
                  </div>
                </div>
              </div>
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Sisa Usia(Bulan)</th>
                        <?php if ($this->session->userdata('akses_level') == "Admin" or $this->session->userdata('akses_level') == "Pegawai") { ?>
                          <th width="7%" class="disabled-sorting text-right">Option</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($sembar as $sembar1) {
                        if ($sembar1->id_barang != 00 && $sembar1->sisa_usia_bulan <= 12) {  ?>
                          <tr class="<?php if ($sembar1->sisa_usia_bulan <= 12) {
                                        echo "table-danger";
                                      } ?>">

                            <td><?php echo $i ?></td>
                            <td><span class="badge badge-default"><?php echo $sembar1->id_barang ?></span></td>
                            <td><?php echo $sembar1->nama_barang ?></td>
                            <td><?php echo $sembar1->jenis_barang ?></td>
                            <td><?php echo $sembar1->merk_barang ?></td>
                            <td name="bulan"><?php echo (round($sembar1->sisa_usia_bulan, 2)) ?></td>
                            <?php if ($this->session->userdata('akses_level') == "Admin" or $this->session->userdata('akses_level') == "Pegawai") { ?>
                              <td>
                                <a href="<?php echo base_url('insertRequest/' . $sembar1->id_barang); ?>" title="Ajukan Pembaruan" class="btn btn-info btn-sm btn-round btn-fab">
                                  <i class="material-icons">publish</i>
                                </a>
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
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Jumlah Perangkat Dengan Usia Manfaat Tersisa 12 Bulan s/d 18 Bulan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="material-datatables">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Sisa Usia(Bulan)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      foreach ($sembar as $sembar) {
                        if ($sembar->id_barang != 00 && $sembar->sisa_usia_bulan <= 18 && $sembar->sisa_usia_bulan >= 12) {  ?>
                          <tr class="<?php if ($sembar->sisa_usia_bulan <= 18 && $sembar->sisa_usia_bulan >= 12) {
                                        echo "table-warning";
                                      } ?>">

                            <td><?php echo $i ?></td>
                            <td><span class="badge badge-default"><?php echo $sembar->id_barang ?></span></td>
                            <td><?php echo $sembar->nama_barang ?></td>
                            <td><?php echo $sembar->jenis_barang ?></td>
                            <td><?php echo $sembar->merk_barang ?></td>
                            <td name="bulan"><?php echo (round($sembar->sisa_usia_bulan, 2)) ?></td>
                          </tr>
                      <?php $i++;
                        }
                      } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>