<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content">
        <div class="row">
          <div class="col-sm-6">
            <div class="box box-solid box-info">
              <div class="box-header with-border">
                <h3> Input Your .... </h3>
              </div>              
              <?php echo form_open('user/inputsampah','class="form-horizontal"');?>
                <div class="box-body" id="settings">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Satuan berat sampah</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="satuan">
                        <option value="0">--SELECT--</option>
                        <option value="kilo">Kilo</option>
                        <option value="gram">Gram</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">berat sampah</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="beratsampah" placeholder="">
                    </div>
                  </div>
                   <div class="form-group">
                        <div class="checkbox">
                        <label class="col-sm-2 control-label">Jenis sampah</label>
                          <label>
                            <input type="checkbox" name="jenis" value="1">
                            plastik
                          </label>
                          <label>
                            <input type="checkbox" name="jenis" value="2">
                            Kaca
                          </label>
                          <label>
                            <input type="checkbox" name="jenis" value="3">
                            sisa makanan
                          </label>
                          <label>
                            <input type="checkbox" name="jenis" value="4">
                            kertas
                          </label>
                          <label>
                            <input type="checkbox" name="jenis" value="5">
                            Sampah masyarakat
                          </label>
                        </div>
                      </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Action</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" name="action" value="1">
                          Dibuang
                        </label>
                        <label>
                          <input type="radio" name="action" value="2">
                          Dibakar
                        </label>
                        <label>
                          <input type="radio" name="action" value="3">
                          Diserahkan TPS
                        </label>
                      </div>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">tanggal</label>
                      <div class="col-sm-7">
                        <div class="input-group">
                          <input type="text" class="form-control datepicker-id" name="tanggal">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                      <input type="submit" class="btn btn-success btn-flat" value="submit">
                    </div>
                  </div>
                </div>
              <?php form_close(); ?>
            </div>
          </div>
        </div>
      </section>
  </div>
<?php $this->load->view('templateadmin/footer'); ?>

 <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->

<script>
  $(function() {
    $('.datepicker-id').datepicker({
      format : 'dd-mm-yyyy'

    });
});
  </script>