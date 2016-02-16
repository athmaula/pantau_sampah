<?php $this->load->view('header');?>

<div class="col-sm-offset-4 col-sm-4 tengah">
  <div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Login Pantau Sampah</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <div>
        <?php echo $this->session->flashdata('error');
              echo validation_errors();  //apabila terjadi kesalahan akan ada pesen error?>
      </div>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
</div>
  <div class="box-body with-border">
    <div>
      <?php echo form_open('login','class="form-horizontal"')?>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
  </div><!-- /.box-body -->
  <div class="box-footer">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Sign in</button>
    </div>
    <a href="<?php echo site_url('file/register') ?>">buat akun baru</a>
    </div>
    <?php form_close(); ?>
  </div><!-- box-footer -->
</div><!-- /.box -->
</div>


<!--<div class="container">
  <div id="box box-solid box-primary">

     <!--mengarahkan hasil inputan ke controller -->



 <!-- menutup form -->
<!--</div>
</div>-->
