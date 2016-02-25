<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar') ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="col-md-offset-1 col-md-8">
			<div class="box box-info">
				<div class="box-header with-border">
					<h2 class="box-title"><strong><?php echo $nama; ?></strong></h2>
				</div>
				<div class="box-body">
						<div class="panel-body">
							<div class="col-xs-12 col-md-4">
								<img src="data:image/jpeg;base64,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" class="img-responsive img-circle" />
							</div>
							<div class="col-xs-12 col-md-5">
								<div class="box-body table-responsive no-padding">
									<table class="table table-bordered table-hover">
										<tr>
											<td>
												Name
											</td>
											<td>
												<?php echo $nama ?>
											</td>
										</tr>
										<tr>
											<td>
												username
											</td>
											<td>
												<?php echo $username ?>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tr>
									<td>
										Email
									</td>
									<td>
										<?php echo $email ?>
									</td>
								</tr>
								<tr>
									<td>
										gender
									</td>
									<td>
										<?php echo $gender ?>
									</td>
								</tr>
								<tr>
									<td>
									 Role as
									</td>
									<td>
										<?php echo $role_id ?>
									</td>
								</tr>
								<tr>
									<td>
										Born Date
									</td>
									<td>
										<?php echo $born_date ?>
									</td>
								</tr>
								<tr>
									<td>
										Bio
									</td>
									<td>
										<?php echo $bio ?>
									</td>
								</tr>
							</table>							
						</div>
					<a href="<?php echo site_url('crud') ?>" class="btn btn-success pull-right">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('templateadmin/footer'); ?>


