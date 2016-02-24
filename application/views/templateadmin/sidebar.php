<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-table"></i> Dashboard</a></li>
        <li><a href="<?php echo site_url('crud') ?>"><i class="fa fa-table"></i> User Table</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i>
            <span>TIPS</span>
            <span class="label label-primary pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/view_input_tips');?>"><i class="fa fa-pencil"></i> Input Tips LandingPage User</a></li>
            <li><a href="<?php echo site_url('admin/view_input_tips_homepage');?>"><i class="fa fa-pencil"></i> Input Tips HomePage</a></li>
         </ul>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>