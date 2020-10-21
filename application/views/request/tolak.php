
<button type="button" class="btn btn-danger btn-sm btn-round btn-fab <?php if ($request->validasi == "yes" || $request->validasi == "no" ){ echo "disabled";  } ?>" data-toggle="modal" data-target="#Tolak<?php echo $request->id_request?>">
    <i class="fa fa-times"></i>
</button>

        <div class="modal modal-danger fade" id="Tolak<?php echo $request->id_request?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tolak Pembaruan</h4>
              </div>
              <div class="modal-body">
                <p>Anda yakin ingin menolak permintaan ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Keluar</button>
                <a href="<?php echo base_url('request/validasin/'.$request->id_request) ?>" class="btn btn-danger pull-right"><i class="fa fa-times"></i> Ya</a> 
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->