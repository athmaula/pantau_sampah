<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
          <!-- /.box -->
          <div class="row">
            <div class="col-md-6">
               <div class="box box-primary">
                <div class="box-header">
                  <h4 class="box-title"> Grapich User Input</h4>
                </div>
                <div class="box-body">
                 <canvas id="data" width="300" height="400"></canvas>
                </div>
               </div>
               <div class="box box-danger">
                <div class="box-header">
                  <h4 class="box-title"> Grapich Garbage </h4>
                </div>
                <div class="box-body">
                 <canvas id="action" width="300" height="400" style="margin-left: 150px"></canvas>
               </div>
               </div>
            </div>
              <div class="col-md-6">
               <div class="box box-primary">
               <div class="box-header">
                  <h4 class="box-title"> Grapich Garbage </h4>
                </div>
                <div class="box-body">
                 <canvas id="kind" width="300" height="400" style="margin-left: 100px"></canvas>
               </div>
               </div>
            </div>
            </div>
            </section>
          </div>
          <!-- /.box -->
  <?php $this->load->view('templateadmin/footer'); ?>

<script>
  var data = {
    labels: ["Maximum your input", "Minimum yout input", "Average your Input"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,<?php echo $getdata_min->input_sampah; ?>,<?php echo $getdata_avg->input_sampah; ?> ]
        }
    ]
};

var context = document.getElementById('data').getContext('2d');
var clientsChart = new Chart(context).Bar(data);

var data = [
  {
    value: <?php echo $getdata_kind1->plastic; ?>,
    color:"#F7464A",
    label:"plastic"
  },
  {
    value : <?php echo $getdata_kind2->paper; ?>,
    color : "#009688",
    label : "paper"
  },
  {
    value : <?php echo $getdata_kind3->glass; ?>,
    color : "#ffa000",
    label : "glass"
  },
  {
    value : <?php echo $getdata_kind4->logam; ?>,
    color : "#00bcd4",
    label : "logam"
  },
  {
    value : <?php echo $getdata_kind5->sisa; ?>,
    color : "#304ffe",
    label : "leftover"
  },
  {
    value : <?php echo $getdata_kind6->other; ?>,
    color : "#cfd8dc",
    label : "other"
  }
  ];

  var kind = document.getElementById("kind").getContext("2d");
  new Chart(kind).Doughnut(data);

  var data = [
  {
    value: <?php echo $getdata_act1->burnt; ?>,
    color:"#878BB6"
  },
  {
    value : <?php echo $getdata_act2->landfill; ?>,
    color : "#4ACAB4"
  },
  {
    value : <?php echo $getdata_act3->discarded; ?>,
    color : "#FF8153"
  },
  {
    value : <?php echo $getdata_act4->other; ?>,
    color : "#FFEA88"
  }
];

var action= document.getElementById("action").getContext("2d");
new Chart(action).Pie(data);



</script>

