<?php $this->load->view('header');?>
<?php $this->load->view('navbar') ?>
 <?php echo $this->session->flashdata('error'); ?>

<div class="col-sm-offset-4 col-sm-4 tengah">
  <div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Login Pantau Sampah</h3>
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
            <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
          </div>
        <label class="col-sm-2 control-label">Password</label>
          <div class="col-sm-12">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
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
