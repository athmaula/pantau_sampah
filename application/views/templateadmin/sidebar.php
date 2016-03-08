<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar sidebar-background">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:#004d40;">MAIN NAVIGATION</li>
        <li><a href="<?php echo site_url('admin') ?>" style="color:#00695c;"><i class="fa fa-bars"></i> Dashboard</a></li>
        <li><a href="<?php echo site_url('crud') ?>" style="color:#00695c;"><i class="fa fa-table"></i> User Table</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-info" style="color:#00695c;"></i>
            <span style="color:#00695c;">Tips</span>
            <span class="label label-primary pull-right"></span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('admin/view_input_tips');?>" style="color:#00695c;">
                <i class="fa fa-pencil"></i>
                <span> Input Tips Infographic Page User</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/view_input_tips_homepage');?>" style="color:#00695c;">
                <i class="fa fa-pencil"></i>
                <span> Input Tips HomePage</span>
              </a>
            </li>
         </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
