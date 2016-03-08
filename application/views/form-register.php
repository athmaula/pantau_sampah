<?php $this->load->view('header');?>
<?php $this->load->view('navbar') ?>


<div class="col-sm-offset-3 col-sm-6 tengah-reg">
  <?php echo $this->session->flashdata('error') ?>
  <div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Sign Up Pantau Sampah</h3>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->

  <div class="box-body with-border">
    <div><?php echo form_open('login/register','class="form-horizontal"')?></div>  <!--mengarahkan hasil inputan ke controller-->
    <div class="form-group">
      <label class="col-sm-2 control-label">Full Name</label>
      <div class="col-sm-12">
          <input type="text" class="form-control" name="nama" placeholder="Pantau Sampah">
          <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>

      <label class="col-sm-2 control-label">Username</label>
      <div class="col-sm-12">
          <input type="text" class="form-control" name="username" placeholder="PantauSampah">
          <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>

      <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-12">
          <input type="password" class="form-control" name="password" placeholder="Insert Password">
          <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>

      <label class="col-sm-4 control-label">Confirm Password</label>
      <div class="col-sm-12">
          <input type="password" class="form-control" name="passconf" placeholder="Retype Password">
          <?php echo form_error('passconf', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>
          <label class="col-sm-2 control-label">Email</label>
      <div class="col-sm-12">
          <input type="text" class="form-control" name="email" placeholder="example@PantauSampah.com">
          <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
      </div>

      <label class="col-sm-1 control-label">Gender</label>
      <div class="col-sm-12">
          <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
          <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
          <?php echo form_error('gender', '<div class="error" style="color: #d50000">', '</div>'); ?>

      </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
  </div><!-- /.box-body -->
  <div class="box-footer">
    <a class="col-sm-offset-0 col-sm-10" href="<?php echo site_url('file/login') ?>">Already have account, Login here</a>
    <button type="submit" class="btn btn-success">Sign in</button>
  </div>
    <?php form_close(); ?> <!-- menutup form -->
  </div><!-- box-footer -->
  </div>
</div><!-- /.box -->
</div>
