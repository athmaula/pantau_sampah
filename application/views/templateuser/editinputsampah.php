<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <div class="content-header">
  	<div class="col-xs-12 col-md-8">
	  	<div class="box box-primary">
	  		<div class="box-header">
	  			<h3 class="box-title">Edit Inputan</h3>
	  		</div>
	  		<?php echo form_open('user/updateinputsampah', 'class="form-horizontal"') ?>
	  		<div class="box-body">
		  		<div class="form-group">
	             <label class="col-sm-2 control-label">Jumlah Inputan</label>
	             <div class="col-sm-5">
	              <input type="hidden" name="id_data" value="<?php echo $id_data ?>">
	              <input type="hidden" name="user_id"?>
	              <input type="text" class="form-control" name="inputsampah" value="<?php echo $input_sampah ?>">
	              </div>
	            </div>
	            <div class="form-group">
                    <label class="col-sm-2 control-label">Action</label>
                      <div class="col-sm-7">
                        <label>
                          <input type="radio" <?php if(isset($action) && $action=="1") echo "checked" ; ?> name="action" value="1">
                          Dibuang
                        </label>
                        <label>
                          <input type="radio" <?php if(isset($action) && $action=="2") echo "checked" ; ?> name="action" value="2">
                          Dibakar
                        </label>
                        <label>
                          <input type="radio" <?php if(isset($action) && $action=="3") echo "checked" ; ?> name="action" value="3">
                          Diserahkan TPS
                        </label>
                      </div>
                  </div>
	            <div class="form-group">
                     <label class="col-sm-2 control-label">Jenis Sampah</label>
                      <div class="col-sm-5">
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="1") echo "checked" ; ?> type="radio" name="jenis_sampah" value="1">
                          Plastik
                        </label>
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="2") echo "checked" ; ?> type="radio" name="jenis" value="2">
                          Kertas
                        </label>
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="3") echo "checked" ; ?> type="radio" name="jenis" value="3">
                          Kaca
                        </label>
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="4") echo "checked" ; ?> type="radio" name="jenis" value="4">
                          Logam
                        </label>
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="5") echo "checked" ; ?> type="radio" name="jenis" value="5">
                          Sisa Makanan
                        </label>
                        <label>
                          <input <?php if(isset($jenis_sampah) && $jenis_sampah=="6") echo "checked" ; ?> type="radio" name="jenis" value="6">
                          Lain -lain
                        </label>
                      </div>
                  </div>
	            <div class="form-group">
                    <label class="col-sm-2 control-label">tanggal</label>
                      <div class="col-sm-5">
                        <div class="input-group date">
                          <input type="text" class="form-control" name="tanggal" data-provide="datepicker" 
                          	data-date-format="yyyy-mm-dd" value="<?php echo $tanggal ?>">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                      </div>
                  </div>
                </div>
	          <div class="box-footer">
	            <div class="form-group">
	            	<div class="col-sm-offset-6 col-sm-5">
	            		<input type="submit" class="btn btn-success" value="Submit" name="submit">
	            		<a href="<?php echo site_url('user') ?>" class="btn btn-danger" >Back</a>
	            	</div>
	            </div>
	  		</div>
	  		<?php form_close(); ?>
	  	</div>
	</div>
  </div>
</div>
<?php $this->load->view('templateuser/footer') ?>
