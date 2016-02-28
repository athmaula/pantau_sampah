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
            fillColor: "#26a69a",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "#00897b",
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
    color:"#2196f3",
    label:"Plastic"
  },
  {
    value : <?php echo $getdata_kind2->paper; ?>,
    color : "#ff5722",
    label : "Paper"
  },
  {
    value : <?php echo $getdata_kind3->glass; ?>,
    color : "#ffa000",
    label : "Glass"
  },
  {
    value : <?php echo $getdata_kind4->logam; ?>,
    color : "#00bcd4",
    label : "Metal"
  },
  {
    value : <?php echo $getdata_kind5->sisa; ?>,
    color : "#e91e63",
    label : "Leftover"
  },
  {
    value : <?php echo $getdata_kind6->other; ?>,
    color : "#cfd8dc",
    label : "Other"
  }
  ];

  var kind = document.getElementById("kind").getContext("2d");
  new Chart(kind).Doughnut(data);

  var data = [
  {
    value: <?php echo $getdata_act1->burnt; ?>,
    color:"#ab47bc",
    label : "Burnt"
  },
  {
    value : <?php echo $getdata_act2->landfill; ?>,
    color : "#29b6f6",
    label : "Sent to Landfill"
  },
  {
    value : <?php echo $getdata_act3->discarded; ?>,
    color : "#ffa726",
    label : "Discarded"
  },
  {
    value : <?php echo $getdata_act4->other; ?>,
    color : "#8d6e63",
    label : "other",
    label : "Other"
  }
];

var action= document.getElementById("action").getContext("2d");
new Chart(action).Pie(data);



</script>
