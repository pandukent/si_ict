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
              <a href="<?php echo base_url('user') ?>" title="Tambah Jenis Baru" class="btn btn-sm fa fa-backward">
                <div class="ripple-container"></div>
              </a>
            </div>
            <a class="navbar-brand" href="">Tambah Data User Administrator</a>
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
				$count_data = $this->db->query("SELECT * FROM user ORDER BY id_user DESC LIMIT 1");
				foreach($count_data->result() as $i){
				$datakode = $i->id_user;
				}
				if (!empty($datakode)) {
					//$nilaikode = substr($datakode[0], 1);
					$kode = (int) $datakode;
					$kode = $kode + 1;
					$hasilkode = str_pad($kode, 3, "0", STR_PAD_LEFT);
				}else {
					$hasilkode = "001";
				}
				//Error Warning
				echo validation_errors('<div class="alert alert-warning" >','</div>');

				//form open
				echo form_open(base_url('user/tambah'));
				?>
                
          <div class="row">
            <div class="col-md-12">
              <form id="TypeValidation" class="form-horizontal" action="" method="">
             	<div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Form Tambah Data Pengguna</h4>
                    </div>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      <label class="col-sm-2 col-form-label">ID User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_user"  value="<?php echo $hasilkode ?>" placeholder="ID User" readonly  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>" required="true" />
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <label class="col-sm-2 col-form-label">Email User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>" required="true" />
                        </div>
                      </div>
                    </div>
					          <div class="row">
                      <label class="col-sm-2 col-form-label">Level Hak Akses User</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <select name="akses_level" class="form-control selectpicker" data-style="btn btn-link" id="akses_level">
                          <option value="Admin">Admin</option>
                          <option value="Pegawai">Pegawai</option>
                          <option value="Pimpinan">Pimpinan</option>
                          </select>
                        </div>
                      </div>
                    </div>
					          <div class="row">
                      <label class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo set_value('username') ?>" required="true" />
                        </div>
                      </div>
                    </div><div class="row">
                      <label class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo set_value('password') ?>" required="true" />
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
  
 

 