<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo $this->session->flashdata('error'); ?>
      <section class="content">
        <div class="row">
          <div class="col-sm-7">
            <div class="box box-solid box-info">
              <div class="box-header with-border">
                <h3> Input Your Garbage Weight </h3>
              </div>
              <?php echo form_open('user/inputsampah','class="form-horizontal"');?>
                <div class="box-body" id="settings">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Satuan berat sampah</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="satuan">
                        <option value="0">--SELECT--</option>
                        <option value="kilo">Kilo</option>
                        <option value="gram">Gram</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Garbage Weight</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="beratsampah" placeholder="">
                    </div>
                  </div>
                   <div class="form-group">
                     <label class="col-sm-4 control-label">Garbage Form</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" name="jenis" value="1">
                          Plastic
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="2">
                          Paper
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="3">
                          Glass
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="4">
                          Logam
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="5">
                          Sisa Makanan
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="6">
                          Other
                        </label>
                      </div>
                  </div>
                  <br />
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Action to Garbage</label>
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
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Date</label>
                      <div class="col-sm-7">
                        <div class="input-group date">
                          <input type="text" class="form-control" name="tanggal" data-provide="datepicker" data-date-format="yyyy-dd-mm">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="form-group">
                    <div class="col-sm-offset-9 col-sm-5">
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
