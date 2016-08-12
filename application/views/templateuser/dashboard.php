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
        <li><a class="active" href="<?php echo site_url('user');?>">Home</a></li>
      </ol>
       <?php echo $this->session->flashdata('sukses') ?>
       <?php echo $this->session->flashdata('success') ?>
       <?php echo $this->session->flashdata('success_insert'); ?>
       <?php echo $this->session->flashdata('success_edit'); ?>
       <?php echo $this->session->flashdata('success_delete'); ?>
    </section>
          <!-- /.box -->
          <section class="content">
           <div class="row">
            <div class="col-xs-12">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Pembuangan Sampah</h3>
                </div>
                <div class="box-body">
                  <div class="box-body table-responsive">
                    <table id="table1" class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th class="hidden"></th>
                          <th class="hidden"></th>
                          <th>Berat Sampah</th>
                          <th class="method">Pembuangan Sampah</th>
                          <th class="kind">Jenis Sampah</th>
                          <th>Tanggal</th>
                          <th class="action">Aksi</th>
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
                            <a href="<?php echo site_url('user/deleteinputsampah/'.$row->id_data); ?>" class="btn btn-danger delete">Hapus</a>
                          </td>
                        </tr>
                        <?php }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Total Inputan Pembuangan Sampah</h3>
                </div>
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover" style="text-align: center">
                      <thead>
                      <th>Total Inputan Sampah</th>
                      <th>Pembuangan Bulan Ini</th>
                      <th>Pembuangan Sampah Maksimal</th>
                      <th>Pembuangan Samapah Minimal</th>
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

    $("a.delete").confirm({
      text: "Apakah anda yakin ingin menghapus data ini ?",
      title: "Konfirmasi",
      confirmButton: "Hapus",
      cancelButton: "Batal",
      post: true,
      confirmButtonClass: "btn-danger",
      cancelButtonClass: "btn-default",
      dialogClass: "modal-dialog modal-md"
    });
//datatables output garbage user
  $(document).ready(function() {
    $('#table1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      columnDefs: [{ targets: 'action', orderable: false}],
      dom: 'Bfrtip',
      lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
      ],
       buttons: [
        {
          extend: 'pdf',
          download: 'open',
          text: 'Cetak PDF',
          orientation: 'portrait',
          pageSize: 'A4',
          exportOptions: {
                  columns: [ 0, 3, 4, 5 ]
              }
        }
    ]
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
