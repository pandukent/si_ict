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
              <a href="<?php echo base_url('merk/') ?>" title="Tambah Tipe Baru" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Tambah Data Tipe Barang</a>
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
      <?php
              $count_barang = $this->db->query("SELECT * FROM merk ORDER BY id_merk DESC LIMIT 1");
              foreach($count_barang->result() as $i){
                $datakode = $i->id_merk;
              }
              if (!empty($datakode)) {
                    //$nilaikode = substr($datakode[0], 1);
                    $kode = (int) $datakode;
                    $kode = $kode + 1;
                    $hasilkode = str_pad($kode, 3, "0", STR_PAD_LEFT);
                }else {
                    $hasilkode = "021";
                }
              //Error Warning
              echo validation_errors('<div class="alert alert-warning" >','</div>');

              //form open
              echo form_open(base_url('merk/tambah'));
              ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
              
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Tambah Data Tipe Barang</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">ID Tipe</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_merk"  value="<?php echo $hasilkode ?>" placeholder="ID Tipe" readonly  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama Tipe</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="merk_barang" placeholder="Tipe Barang" value="<?php echo set_value('merk_barang') ?>" required="true" />
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
