<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <section class="content">
  <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Grapich Garbage Productvity</h3>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="weeks" style="height:400px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
  		<div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Grapich Garbage Productvity</h3>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="kind" style="height:250px"></canvas>
              </div>
              <div id="js-legend" class="chart-legend"></div
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

<?php $this->load->view('templateuser/footer'); ?>
<script>
var data = {
    labels: ["Maximum your input", "Minimum yout input", "Average your Input", "Data Monthly"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "#42a5f5",
            strokeColor: "#1e88e5",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,<?php echo $getdata_min->input_sampah;?>, <?php echo $getdata_avg->input_sampah;?>, <?php echo $data_monthly->input_sampah;?> ]
        }
    ]
};
 var options = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

var context = document.getElementById('weeks').getContext('2d');
var clientsChart = new Chart(context).Bar(data, options);

var data = [
  {
    value: <?php echo $getdata_cnt1->plastic; ?>,
    color:"#F7464A",
    label:"plastic"
  },
  {
    value : <?php echo $getdata_cnt2->paper; ?>,
    color : "#D4CCC5",
    label : "paper"
  },
  {
    value : <?php echo $getdata_cnt3->glass; ?>,
    color : "#9c27b0",
    label : "glass"
  },
  {
    value : <?php echo $getdata_cnt4->logam; ?>,
    color : "#FF8153",
    label : "logam"
  },
  {
    value : <?php echo $getdata_cnt5->leftover; ?>,
    color : "#FFEA88",
    label : "leftover"
  },
  {
    value : <?php echo $getdata_cnt6->other; ?>,
    color : "#4caf50",
    label : "other"
  }
  ];
  var options = {
     //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
  }

  var ctx = document.getElementById("kind").getContext("2d");
  var kind = new Chart(ctx).Doughnut(data, options);
  document.getElementById('js-legend').innerHTML = kind.generateLegend();

</script>
