<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php echo $this->session->flashdata('error'); ?>
      <ol class="breadcrumb">
          <li><a href="<?php echo site_url('user');?>">Home</a></li>
          <li><a class="active">Input Garbage</a></li>
      </ol>
    </section>
      <section class="content">
        <div class="row">
            <div class="col-sm-7">
            <div class="box box-solid box-info">
              <div class="box-header with-border">
                <h3 class="box-title"> Masukan Berat Pembuangan Sampah Anda </h3>
              </div>
              <?php echo form_open('user/inputsampah','class="form-horizontal"');?>
                <div class="box-body" id="settings">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Berat Sampah</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="beratsampah" placeholder="Kilo">
                      <?php echo form_error('beratsampah', '<div class="error" style="color: #d50000">', '</div>'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Tipe Sampah</label>
                  </div>
                   <div class="form-group">
                     <label class="col-sm-4 control-label">Organik</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" name="jenis" value="2" class="flat-green">
                          Kertas
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="5" class="flat-green">
                          Sisa Makanan
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="6" class="flat-green">
                          lainnya
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Anorganik</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" name="jenis" value="1" class="flat-red">
                          Plastik
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="3" class="flat-red"> 
                          Kaca
                        </label>
                        <label>
                          <input type="radio" name="jenis" value="4" class="flat-red">
                          Logam
                        </label>
                        <?php echo form_error('jenis', '<div class="error" style="color: #d50000">', '</div>'); ?>
                      </div>
                  </div>
                  <br />
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Cara Pembuangan</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" name="action" value="1" class="flat-aero">
                          Dibakar
                        </label>
                        <label>
                          <input type="radio" name="action" value="2" class="flat-aero">
                          Kirim ke TPS
                        </label>
                        <label>
                          <input type="radio" name="action" value="3" class="flat-aero">
                          Buang Sembarang
                        </label>
                        <?php echo form_error('action', '<div class="error" style="color: #d50000">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Tanggal</label>
                      <div class="col-sm-7">
                        <div class="input-group date">
                          <input type="text" class="form-control" name="tanggal" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                        <?php echo form_error('tanggal', '<div class="error" style="color: #d50000">', '</div>'); ?>
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

<?php $this->load->view('templateuser/footer'); ?>