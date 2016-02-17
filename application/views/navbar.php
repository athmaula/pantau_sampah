<?php $this->load->view('header') ?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="<?php echo site_url('file/index'); ?>">PantauSampah</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li><a href="<?php echo site_url('file/index#tentang'); ?>">About Us</a></li>
      	</ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo site_url('file/login'); ?>"><span class="glyphicon glypicon-log-in"></span>Login</a></li>
          <li><a href="<?php echo site_url('file/register'); ?>"><span class="glyphicon glypicon-user"></span>Sign Up</a></li>
        </ul>
    </div>
  </nav>
