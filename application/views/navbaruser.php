<?php $this->load->view('header') ?>
<body>

<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">PantauSampah</a>
    </div>
    <ul class="nav-baru navbar-nav navbar-right">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('user/inputview')?>">Input Your Garbage</a></li>
          <li><?php echo anchor('logout', 'Sign Out'); ?></li>
        </ul>
    </ul>
  </div>
</nav>
