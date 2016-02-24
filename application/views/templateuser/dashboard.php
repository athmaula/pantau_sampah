<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
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
                    <table class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jumlah Inputan</th>
                          <th>Aksi ke sampah</th>
                          <th>Jenis</th>
                          <th>Tanggal</th>
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
                          <td><?php echo $row->pembuangan; ?></td>
                          <td><?php echo $row->jenis; ?></td>
                          <td><?php echo $row->tanggal; ?></td>
                          <td>
                            <a href="<?php echo site_url('user/editinputsampah/'.$row->id_data);?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('user/deleteinputsampah/'.$row->id_data); ?>" class="btn btn-danger" onclick="return dodelete()">Delete</a>
                          </td>
                        </tr>
                        <?php }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-5">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Total Inputan</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                      <th>Input Sampah Total</th>
                      <th>Input Sampah perbulan</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $data->input_sampah; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
            <div class="box box-primary">
              <canvas id="chart" width="50" height="50"></canvas>
            </div>
            </div>
            </div>
          </section>
          <!-- /.row -->
        </div>
        <?php $this->load->view('templateuser/footer'); ?>
        <!-- /.col -->
  <!-- /.content-wrapper -->

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

