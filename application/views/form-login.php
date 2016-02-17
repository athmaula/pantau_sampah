<?php $this->load->view('header');?>
 <?php echo $this->session->flashdata('error');
       echo validation_errors();  //apabila terjadi kesalahan akan ada pesen error?>

<div class="col-sm-offset-4 col-sm-4 tengah">
  <div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Register Pantau Sampah</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <div>
      </div><!-- /.box-tools -->

    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body with-border">
  <?php echo form_open('login','class="form-horizontal"')?>
    <div class="form-group">
        <label class="col-sm-2 control-label">Username</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
        <label class="col-sm-2 control-label">Password</label>
          <div class="col-sm-12">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
    </div>
  </div>
    <div class="clearfix"></div>
    <div class="form-group">
  </div><!-- /.box-body -->
  <div class="box-footer">
    <a class="col-sm-offset-0 col-sm-9" href="<?php echo site_url('file/register') ?>">Don't have an Account, Register Here</a>
    <button type="submit" class="btn btn-success">Sign in</button>
  </div>
    <?php form_close(); ?> <!-- menutup form -->
  </div><!-- box-footer -->
  </div>
</div><!-- /.box -->
</div>
