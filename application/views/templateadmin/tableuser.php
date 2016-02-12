<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
<div class="content-header">
<div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
            <a href="<?php echo site_url('crud/add') ?>" class="fa fa-user-plus fa-3x"> add new</a>
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($get_data as $row) {
                    # code...
                   ?>
					        <tr>
					          <td><?php echo $row->id; ?></td>
					          <td><?php echo $row->username; ?></td>
					          <td><?php echo $row->nama; ?></td>
					          <td><?php echo $row->email; ?></td>
					          <td><?php echo $row->gender; ?></td>
					          <td><?php echo $row->role_id; ?></td>
					          <td>
					          	<a href="<?php echo site_url('crud/edit/'.$row->id);?>" class="btn btn-warning">Edit</a> 
					          	<a href="<?php echo site_url('crud/delete_user/'.$row->id); ?>" class="btn btn-danger">Delete</a>
					          </td>
					      <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
      </div>
    </div>
    </div>
<?php $this->load->view('templateadmin/footer'); ?> 