<?php $this->load->view('header');?>
<body class="register-body">
  <nav class="navbar navbar-custom navbar-fixed-top navbar-collapse">
    <div class="container">
        <div class="navbar-header">
        <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand pantau_sampah" href="<?php echo site_url('file/index'); ?>">PantauSampah</a>
        <a href="#tentang" class="navbar-brand" style="font-size:14px">About Us</a>
  </nav>
  <div class="col-sm-offset-3 col-sm-6 tengah-reg">
    <?php echo $this->session->flashdata('error') ?>
    <?php echo form_open('login/register','class="form-horizontal" id="reg-box"')?>
    <h3 class="title-box">Sign Up Pantau Sampah <hr /></h3>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">Full Name</label>
          <input type="text" class="form-control" name="nama" placeholder="Pantau Sampah">
          <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
         <label class="control-label">Username</label>
            <input type="text"class="form-control" name="username" placeholder="PantauSampah">
            <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Password</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" placeholder="Insert Password">
            <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">Confirm Password</label>
            <input type="password" class="form-control" name="passconf" placeholder="Retype Password">
            <?php echo form_error('passconf', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
        <label class="control-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="example@PantauSampah.com">
            <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-12">
            <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
            <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
            <?php echo form_error('gender', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
      </div>
    <div class="clearfix"></div>
    <div class="box-footer">
      <a class="col-sm-offset-0 col-sm-10" href="<?php echo site_url('file/login') ?>">Already have account, Login here</a>
      <button type="submit" class="btn btn-success">Sign in</button>
    </div>
    <?php form_close(); ?> <!-- menutup form -->
  </div>
</body>
