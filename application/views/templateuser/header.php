<!DOCTYPE html>
<html>
  <head>
    <title>Pantau Sampah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap link -->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/plugins/datepicker/datepicker3.css">
    <!-- Font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css"  rel="stylesheet" >
    <!-- theme admin lte style -->
    <link href="<?php echo base_url(); ?>asset/css/AdminLTE.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url(); ?>asset/css/skins/_all-skins.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url(); ?>asset/css/tambahan.css"  rel="stylesheet" >


  </head>
  <body class="hold-transition skin-custom sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('user/landingpage') ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ps</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pantau</b>Sampah</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>asset/img/avatar04.png" class="user-image" alt="User Image">
                  <?php echo $this->session->userdata('username') ?>
                </a>
                <ul class="dropdown-menu">
                <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>asset/img/avatar04.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('username') ?>
                    </p>
                    <p>
                    <?php if ($this->session->userdata('role') == 1) {
                      echo "admin";
                      # code...
                      }else
                      {
                        echo "Member";
                      }
                    ?></p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('/user/view') ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <?php echo anchor('logout', 'Sign Out', 'class="btn btn-default btn-flat"'); ?>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
