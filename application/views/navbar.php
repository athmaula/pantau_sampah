<?php $this->load->view('header') ?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">PantauSampah</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li><a href="#">Tentang Kami</a></li>
      	</ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo site_url('file/login'); ?>"><span class="glyphicon glypicon-log-in" data-toggle="modal"></span>Login</a></li>
          <li><a href="<?php echo site_url('file/register'); ?>"><span class="glyphicon glypicon-user"></span>Sign Up</a></li>
        </ul>
    </div>
  </nav>
