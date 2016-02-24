<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
       <?php echo $this->session->flashdata('success_insert'); ?>
       <?php echo $this->session->flashdata('success_edit'); ?>
       <?php echo $this->session->flashdata('success_delete'); ?>
    </section>
          <!-- /.box -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12 col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> Inputan sampah</h3>
                </div>
                <div class="box-body">
                  <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jumlah Inputan</th>
                          <th>Satuan</th>
                          <th>Aksi ke sampah</th>
                          <th>Jenis</th>
                          <th>Tanggal</th>
                          <th>Edit_at</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 0;
                           foreach ($getdata as $row) {
                        # code..
                              $no++;
                       ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td class="hidden"><?php echo $row->id_data; ?></td>
                          <td class="hidden"><?php echo $row->user_id; ?></td>
                          <td><?php echo $row->input_sampah; ?></td>
                          <td><?php echo $row->satuan; ?></td>
                          <td><?php echo $row->action; ?></td>
                          <td><?php echo $row->jenis_sampah; ?></td>
                          <td><?php echo $row->tanggal; ?></td>
                          <td><?php echo $row->edit_at; ?></td>
                          <td>
                            <a href="<?php echo site_url('user/editinputsampah/'.$row->id_data);?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('user/deleteinputsampah/'.$row->id_data); ?>" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
          <!-- /.row -->
        </div>
        <?php $this->load->view('templateuser/footer'); ?>
        <!-- /.col -->
  <!-- /.content-wrapper -->
