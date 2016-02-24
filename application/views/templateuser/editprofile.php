<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="box box-info">
      <div class="box-header with-border">
          <h3 class="box-title"> Edit Your Profile</h3>
      </div>
      <div class="box-body">
        <div class="col-xs-12 col-md-5">
                   <?php echo form_open('user/update','class="form-horizontal"'); ?>  <!--mengarahkan hasil inputan ke controller--> 
          <div class="form-group">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
                <input type="text" class="form-control" name="nama" value="<?php echo $profile->nama; ?>">
                <?php echo form_error('nama', '<div class="error" style="color: #d50000">', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?php echo $profile->username; ?>">
                <?php echo form_error('username', '<div class="error" style="color: #d50000">', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" value="<?php echo $profile->password; ?>">
                <?php echo form_error('password', '<div class="error" style="color: #d50000">', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="<?php echo $profile->email; ?>">
                <?php echo form_error('email', '<div class="error" style="color: #d50000">', '</div>'); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Bio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bio" value="<?php echo $profile->bio; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Born Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="born_date" value="<?php echo $profile->born_date; ?>" data-provide="datepicker" data-date-format="yyyy-mm-dd">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
                <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="male") echo "checked" ; ?> value="male"/>Male
                <input type="radio" name="gender" <?php if(isset($profile->gender) && $profile->gender=="female") echo "checked" ; ?> value="female"/>Female
            </div>
          </div><hr>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-flat" value="Update">
                <a href="<?php echo site_url('user/view') ?>" class="btn btn-danger btn-flat" >Back</a>
            </div>
          </div>
      </form> <!-- menutup form -->
      </div>
      <div class="col-xs-12 col-md-offset-2 col-md-5">
        <div class="box box-primary">
          <div class="box-body">
              <div class="col-xs-12 col-md-3">
                <img src="<?php echo base_url(); ?>asset/img/avatar04.png" class="img-responsive img-circle">
              </div>
              <div class="col-xs-12 col-md-offset-2 col-md-2">
                <?php echo form_open_multipart('user/do_upload');?>
                <input type="file" name="userfile" size="20" />
                <br /><br />
                <input type="submit" value="upload" name="upload" />
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('templateuser/footer'); ?>

