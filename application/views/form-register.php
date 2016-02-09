<?php $this->load->view('header');?>
<div class="container">
<div><?php $this->session->flashdata('error') ?></div>
<div><?php validation_errors(); ?></div>
    <div><?php echo form_open('login/register','class="form-horizontal"')?></div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Full Name</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Username</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
          <input type="password" class="form-control" name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Gender</label>
      <div class="col-sm-10">
          <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
          <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Sign in</button>
      </div>
    </div>
<?php form_close(); ?>
</div>