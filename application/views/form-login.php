<?php $this->load->view('header');?>
<body class="login-body">
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
  <div class="col-sm-offset-4 col-sm-4 tengah">
    <?php echo $this->session->flashdata('error'); ?>
    <?php echo form_open('login','class="form-horizontal" id="login-box"')?>
    <h3 class="title-box">Pantau Sampah <hr /></h3>
    <div class="form-group">
      <label class="col-sm-2 control-label">Username</label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-12">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
  <div class="box-footer">
    <a class="col-sm-offset-0 col-sm-9" href="<?php echo site_url('file/register') ?>">Don't have an Account, Register Here</a>
    <button type="submit" class="btn btn-success">Sign in</button>
  </div>
    <?php form_close(); ?> <!-- menutup form -->
  </body>

</div>
