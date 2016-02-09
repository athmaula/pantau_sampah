<?php $this->load->view('header');?>
<div class="container">
<div><?php $this->session->flashdata('error');
           echo validation_errors();
 ?></div>
    <div><?php echo form_open('login','class="form-horizontal"')?></div>
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
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Sign in</button>
      </div>
    <a href="<?php echo site_url('file/register') ?>">buat akun baru</a>
    </div>
<?php form_close(); ?>
</div>