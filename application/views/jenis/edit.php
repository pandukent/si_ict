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
              <a href="<?php echo base_url('jenis') ?>" title="edit data barang" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Edit Data Jenis Barang</a>
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
      //Error Warning
      echo validation_errors('<div class="alert alert-warning" >','</div>');

      //form open
      echo form_open(base_url('jenis/edit/'.$jenis->id_jenis));
      ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
             	
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Edit Data Jenis Barang</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">ID Jenis</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                        <input type="text" name="id_jenis" class="form-control" placeholder="ID jenis" value="<?php echo $jenis->id_jenis ?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama Jenis</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                         <input type="text" name="jenis_barang" class="form-control" placeholder="Jenis Barang" value="<?php echo $jenis->jenis_barang ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                  <div class="form-group ">
                    <button type="submit" name ="submit" class="btn btn-success">
                      <i class="material-icons">save</i> Simpan Data</button>
                    </button>
                    <button type="reset" name ="reset" class="btn btn-danger">
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
 
