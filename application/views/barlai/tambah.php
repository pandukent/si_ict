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
            <div class="navbar-minimize">
              <a href="<?php echo base_url('barlai') ?>" title="Tambah Barang Lainnya" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Tambah Data Barang Lainnya</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('barlai') ?>"> Barang Lainnya</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Barang Lainnya</li>
        </ol>
        </div>
      </nav>     
       <!-- Navbar Selesai -->

    
      <div class="content">
        <div class="container-fluid">
          <?php
                $count_barang = $this->db->query("SELECT a.id_barang
                FROM siictundip.barang_lainnya as a
                UNION
                SELECT b.id_barang
                FROM siictundip.server as b
                UNION
                SELECT c.id_barang
                FROM siictundip.hardisk as c
                ORDER BY id_barang  DESC LIMIT 1");
                foreach($count_barang->result() as $i){
                  $datakode = $i->id_barang;
                }
                if (!empty($datakode)) {
                    //$nilaikode = substr($datakode[0], 1);
                    $kode = (int) $datakode;
                    $kode = $kode + 1;
                    $hasilkode = str_pad($kode, 4, "0", STR_PAD_LEFT);
                }else {
                    $hasilkode = "9000";
                }
              //Error Warning
              echo validation_errors('<div class="alert alert-warning" >','</div>');

              //form open
              echo form_open(base_url('barlai/tambah'));
              ?>
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
              <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Tambah Data Barang Lainnya</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">ID Barang</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_barang"  value="<?php echo $hasilkode ?>" placeholder="ID Barang" readonly  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nama_barang" value="<?php echo set_value('nama_barang') ?>" placeholder="Nama Barang" required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     <label class="col-sm-2 col-form-label">Jenis Barang</label>
                     <div class="col-sm-3">
                       <div class="form-group">
                         <select name="id_jenis" class="form-control selectpicker" data-style="btn btn-primary btn-round" id="id_jenis">
                         <option disabled selected>Jenis Barang</option>
                        <?php foreach ($jenis as $jenis) { 
                        if ($jenis->id_jenis !=0){?>
                        <option value="<?php echo $jenis->id_jenis?>"><?php echo $jenis->jenis_barang ?></option>
                        <?php } }?>
                         </select>
                       </div>
                     </div>
                        </div>
                     <div class="row">
                     <label class="col-sm-2 col-form-label">Merk Barang</label>
                     <div class="col-sm-3">
                       <div class="form-group">
                         <select name="id_merk" class="form-control selectpicker" data-style="btn btn-primary btn-round" id="id_merk">
                         <option disabled selected>Merk Barang</option>
                        <<?php foreach ($merk as $merk) {
                        if ($merk->id_merk !=0){?>				
                        <option value="<?php echo $merk->id_merk ?>"><?php echo $merk->merk_barang ?></option>
                        <?php }} ?>
                         </select>
                       </div>
                     </div>
                        </div>
                     <div class="row">
                      <label class="col-sm-2 col-form-label">Tanggal Pemasangan</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                        <input class="form-control datepicker" type="text" name="tanggal_pasang" placeholder="Tanggal Pemasangan" value="<?php echo set_value('tanggal_pasang') ?>" required="true" /> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                  <div class="form-group ">
                    <button type="submit" class="btn btn-success">
                      <i class="material-icons">save</i> Simpan Data</button>
                    </button>
                    <button type="reset" class="btn btn-danger">
                      <i class="material-icons">close</i> Reset</button>
                    </button>
                    
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      
<?php

//form close
echo form_close();
?>

            </div>
            </div>  
  
 