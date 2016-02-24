<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <?php echo $this->session->flashdata('success_edit'); ?>
  <?php echo $this->session->flashdata('error_edit'); ?>
      <section class="content">
        <div class="row">
        <div class="col-xs-12 col-md-10">
        	<div class="box box-info">
        		<div class="box-header with-header">
        			<h3 class="box-title">LANDINGPAGE USER TIPS</h3>
        		</div>
        		<div class="box-body">
        			<div class="box-body table-responsive">
        				<table class="table table-strip table-hover">
        					<thead>
    							<th>No</th>
    							<th>Title</th>
    							<th>Content</th>
    							<th style="width: 150px;">Action</th>
        					</thead>
        					<tbody>
        					<?php 	$no = 0;
        							foreach ($get as $row) {
        								$no++;
        								?>
        						<tr>
        							<td><?php echo $no; ?></td>
        							<td class="hidden"><?php echo $row->id; ?></td>
        							<td class="hidden"><?php echo $row->id_user; ?></td>
        							<td><?php echo $row->title; ?></td>
        							<td><?php echo $row->content; ?></td>
        							<td>
        								<a href="<?php echo site_url('admin/edit_tips_landingpage/'.$row->id);?>" class="btn btn-warning">Edit</a>
                            			<a href="<?php echo site_url('admin/delete_tips_landingpage/'.$row->id); ?>" class="btn btn-danger" onclick="return dodelete()">Delete</a>
        							</td>
        						</tr>
        						<?php } ?>
        					</tbody>
        				</table>
        			</div>
        		</div>
        	</div>
        </div>
        	<div class="col-xs-12 col-md-6">
        		<div class="box box-primary">
        			<div class="box-header with-header">
        				<h3 class="box-title">INPUT TIPS</h3>
        			</div>
        			 <?php echo form_open('admin/input_tips','class="form-horizontal"');?>
        			<div class="box-body">
        				<div class="form-group">
                    		<label class="col-sm-2 control-label">Title</label>
                    		<div class="col-sm-8">
                      			<input type="text" class="form-control" name="title">
                    		</div>
                  		</div>
                  		<div class="form-group">
                    		<label class="col-sm-2 control-label">Content</label>
                    		<div class="col-sm-8">
                      			<textarea class="form-control" name="content" rows="5" cols="50"></textarea>
                    		</div>
                  		</div>
        			</div>
        			<div class="box-footer">
                  		<div class="form-group">
                    		<div class="col-sm-offset-9 col-sm-5">
                      			<input type="submit" class="btn btn-success btn-flat" value="submit">
                    		</div>
                  		</div>
                	</div>
                </form>
        	</div>
        </div>
       </div>
        </section>
</div>
<?php $this->load->view('templateadmin/footer'); ?>

<script type="text/javascript">
    function dodelete()
    {
        if(confirm("Are You Sure ?"))
        {
            return true;
        }
        else
        {
            return false;  
        } 
   }
  </script>
