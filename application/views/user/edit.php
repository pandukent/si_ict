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
              <a href="<?php echo base_url('user') ?>" title="edit data barang" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Edit Data User Administrator</a>
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
      echo form_open(base_url('user/edit/'.$user->id_user));
      ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
             	
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Edit Data Pengguna</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">ID User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_user"  value="<?php echo $user->id_user ?>" placeholder="ID User" readonly  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" required="true" />
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <label class="col-sm-2 col-form-label">Email User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $user->email ?>" required="true" />
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <label class="col-sm-2 col-form-label">Level Hak Akses User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
							<select name="akses_level" class="form-control selectpicker" data-style="btn btn-link" id="akses_level">
							<option value="Admin">Admin</option>
							<option value="Pegawai" <?php if($user->akses_level=="Pegawai") { echo "selected" ; } ?>>Pegawai</option>
							<option value="Pimpinan" <?php if($user->akses_level=="Pimpinan") { echo "selected" ; } ?>>Pimpinan</option>
							</select>
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <label class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $user->username ?>" required="true" />
                        </div>
                      </div>
                    </div><div class="row">
                      <label class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo set_value('password') ?>"  required="true" />
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
 


 