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
              <a href="<?php echo base_url('server') ?>" title="edit data barang" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Edit Data Server</a>
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
      echo form_open(base_url('server/edit/'.$server->id_server));
      ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
             	
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Edit Data Server</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                  <div class="row">
                      <label class="col-sm-2 col-form-label">ID Server</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_server"  value="<?php echo $server->id_server ?>" placeholder="ID Server" readonly  />
                        </div>
                      </div>
                    </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label">ID Barang</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_barang"  value="<?php echo $server->id_barang ?>" placeholder="ID Barang" readonly  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama Server</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nama_server" value="<?php echo $server->nama_server ?>" placeholder="Nama Server" required="true" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nickname</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nickname" value="<?php echo $server->nickname ?>" placeholder="Nickname server di nagios"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <label class="col-sm-2 col-form-label">Jenis Barang</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="hidden" name="id_jenis" value="<?php echo $server->id_jenis ?>" placeholder="Server" required="true" readonly/>
                          <input class="form-control" type="text" value="Server" placeholder="" required="true" readonly/>
                        </div>
                      </div>
                        </div>
                     <div class="row">
                     <label class="col-sm-2 col-form-label">Merk Barang</label>
                     <div class="col-sm-3">
                       <div class="form-group">
                         <select name="id_merk" class="form-control selectpicker" data-style="btn btn-primary btn-round" id="id_merk">
                         <?php foreach ($merk as $merk) { ?>
                        <?php
                            $merk = $this->db->get_where('merk')->result();
                            $id = $server->id_merk;
                            if (!empty($merk)) {
                            foreach ($merk as $row) {
                            if ($row->id_merk !=0){
                              echo "<option value='$row->id_merk'";
                              echo $id == $row->id_merk ? 'selected' : '';
                              echo">$row->merk_barang</option>";
                              }
                            }
                              ?>
                          <?php }} ?>
                         </select>
                       </div>
                     </div>
                        </div>
                     <div class="row">
                      <label class="col-sm-2 col-form-label">Tanggal Pemasangan</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                        <input class="form-control datepicker" type="text" name="tanggal_pasang" placeholder="Tanggal Pemasangan" value="<?php echo $server->tanggal_pasang ?>" required="true" /> 
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
 
