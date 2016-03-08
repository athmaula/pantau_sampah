<!DOCTYPE html>
<html>
  <head>
    <title>Pantau Sampah</title>
    <!-- bootstrap link -->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/tambahan.css" rel="stylesheet">
    <!-- Font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.css">
    <!-- theme admin lte style -->
    <script src="<?php echo base_url()?>asset/plugins/chartjs/Chart.min.js"></script>
    <link href="<?php echo base_url(); ?>asset/css/AdminLTE.min.css"  rel="stylesheet" >
    <link href="<?php echo base_url(); ?>asset/css/skins/_all-skins.min.css"  rel="stylesheet" >

  </head>

<style type="text/css">
.skin-custom .main-header .navbar {
  background-color: #4db6ac;
}

.skin-custom .main-header .logo {
  background-color: #26a69a;
  color: white;
}

.skin-custom .main-header .navbar a:hover {
  background-color: #00695c;
  text-decoration: none;
}
</style>

  <body class="hold-transition skin-custom sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini"><b>PS</b></span>
          <span class="logo-lg"><b>Pantau</b>Sampah</span>
        </a>
        
        <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php echo $this->session->userdata('username') ?>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <h3><?php echo $this->session->userdata('username') ?></h3>
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
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('admin/view') ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <?php echo anchor('logout', 'Sign Out', 'class="btn btn-default btn-flat"'); ?>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
