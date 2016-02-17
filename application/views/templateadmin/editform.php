<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="box box-info">
      <div class="box-body">
                   <?php echo form_open('crud/update','class="form-horizontal"');
                    echo validation_errors();?>  <!--mengarahkan hasil inputan ke controller--> 
          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?php echo $username ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"/>Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"/>Female
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-10">
                <input type="radio" name="role" <?php if (isset($role) && $role=="1") echo "checked";?> value="1"/>Admin
                <input type="radio" name="role" <?php if (isset($role) && $role=="2") echo "checked";?> value="2" />Member
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success" name="mit" value="Update">
                <a href="<?php echo site_url('crud') ?>" class="btn btn-danger" >Back</a>
            </div>
          </div>
      <?php form_close(); ?> <!-- menutup form -->
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('templateadmin/footer'); ?>

