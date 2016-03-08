<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
       <?php echo $this->session->flashdata('success') ?>
       <?php echo $this->session->flashdata('success_insert'); ?>
       <?php echo $this->session->flashdata('success_edit'); ?>
       <?php echo $this->session->flashdata('success_delete'); ?>
    </section>
          <!-- /.box -->
          <section class="content">
           <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Garbage Data</h3>
                </div>
                <div class="box-body">
                  <div class="box-body table-responsive">
                    <table id="table1" class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th class="hidden"></th>
                          <th class="hidden"></th>
                          <th>Garbage Weight</th>
                          <th class="method">Method of Disposal</th>
                          <th class="kind">Garbage Kind</th>
                          <th>Date</th>
                          <th class="action">Action</th>
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
                          <td><?php echo $row->input_sampah; ?> Kilo</td>
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
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Total Garbage Input</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                      <th>Total Garbage Inputed</th>
                      <th>Monthly Garbage Weight Inputed</th>
                      <th>Maximum Garbage Weight Inputed</th>
                      <th>Minimum Garbage Weight Inputed</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $data->input_sampah; ?> Kilo</td>
                          <td><?php echo $data_monthly->input_sampah;?> Kilo</td>
                          <td><?php echo $data_max->input_sampah; ?> Kilo</td>
                          <td><?php echo $data_min->input_sampah; ?> Kilo</td>
                        </tr>
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

<script>
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
//datatables
  $(document).ready(function() {
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      columnDefs: [{ targets: 'action', orderable: false}]
    });
    $('#table').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
} );
  </script>
