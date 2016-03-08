<?php $this->load->view('header') ?>
<body>

<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="navbar-header">
          <a class="navbar-brand m-r-lg page-scroll" href="">PantauSampah</a>
        </div>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="collapse navbar-collapse">
          <ul class="nav nav-baru navbar-nav navbar-right">
            <li><a href="<?php echo site_url('user')?>">Dashboard</a></li>
            <li><?php echo anchor('logout', 'Sign Out'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
