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
            <a class="navbar-brand" href="">Data Tipe/Merk Barang</a>
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
      if($this->session->flashdata('sukses'))
      {
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
              <h4 class="card-title">Data Tipe Barang</h4>
            </div>
            <div class="card-body">
              <div class="toolbar">
              <a href="<?php echo base_url('merk/tambah') ?>" title="Tambah Tipe Baru" class="btn btn-primary">Tambah Baru
                <div class="ripple-container"></div>
              </a>
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                    <tr>
                    <th width="5%">No</th>
                    <th>ID Tipe</th>
                    <th>Tipe</th>
                    <th width ="10%" class="disabled-sorting text-right">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($merk as $merk){ 
                  if($merk->id_merk != 00){?>
                    <tr>
                    <td><?php echo $i ?></td>
                    <td><span class="badge badge-default"><?php echo $merk->id_merk ?></span></td>
                    <td><?php echo $merk->merk_barang ?></td>
                    <td>
                    <a href="<?php echo base_url('merk/edit/'.$merk->id_merk) ?>" title=""
                    class="btn btn-warning btn-sm btn-round btn-fab">
                        <i class ="fa fa-edit"></i>
                        </a>

                  <?php
                  //link delete
                  include('delete.php');
                  ?>
                    </td>
                  </tr>
                  <?php $i++; }} ?>
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
