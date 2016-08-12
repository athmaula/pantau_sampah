<?php $this->load->view('templateadmin/header'); ?>
<?php $this->load->view('templateadmin/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Produktifitas User</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="data" style="height:400px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-5">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Pembuangan Sampah User</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="action" style="height:320px"></canvas>
            </div>
            <div id="legend-chart" class="chart-legend"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Pembuangan Sampah User</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Grafik Produktivitas User</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="data-2"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Semua Jenis input_sampah</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Jenis Sampah Organik</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind-1" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Jenis Sampah Anorganik</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="kind-2" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="js-legend" class="chart-legend"></div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /.box -->
<?php $this->load->view('templateadmin/footer'); ?>

<script>
  //grafik produktivitas user
  var options = {
    tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
  }
  var data = {
    labels: ["Maximum user input", "Minimum user input", "Average user Input"],
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

  //grafik produktivitas
  var weekData = {
  labels : [<?php $no=0; foreach ($getdata_input as $row) {
                  $no++;
                  echo $no.',';
                    } ?>],
  datasets : [
    {
      label : "Grafik Produktifitas Anda",
      fillColor : "#b2dfdb",
      strokeColor : "#00796b",
      pointColor : "#fff",
      pointStrokeColor : "#004d40",
      data : [<?php foreach ($getdata_input as $row) {
                    echo $row->input_sampah.',';
      } ?>]
    }
  ]
}

var weeks = document.getElementById('data-2').getContext('2d');
new Chart(weeks).Line(weekData,{
  responsive : true,
  scaleShowVerticalLines : true,
  tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
});

  //grafik jenis sampah
  var context = document.getElementById('data').getContext('2d');
  var clientsChart = new Chart(context).Bar(data, options);

  var data = [
  {
    value: <?php echo $getdata_kind1->plastic; ?>,
    color:"#2196f3",
    label:"Plastik"
  },
  {
    value : <?php echo $getdata_kind2->paper; ?>,
    color : "#ff5722",
    label : "Kertas" 
  },
  {
    value : <?php echo $getdata_kind3->glass; ?>,
    color : "#ffa000",
    label : "Kaca"
  },
  {
    value : <?php echo $getdata_kind4->logam; ?>,
    color : "#00bcd4",
    label : "Logam"
  },
  {
    value : <?php echo $getdata_kind5->sisa; ?>,
    color : "#e91e63",
    label : "Sisa Makanan"
  },
  {
    value : <?php echo $getdata_kind6->other; ?>,
    color : "#cfd8dc",
    label : "Lainnya"
  }
  ];
  var options = {
//String - A legend template
legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + '%' %>"
}

var ctx = document.getElementById("kind").getContext("2d");
var kind = new Chart(ctx).Doughnut(data, options);
document.getElementById('js-legend').innerHTML = kind.generateLegend();

//grafik aksi pembuangan sampah
var data = [
{
  value : <?php echo $getdata_act1->burnt; ?>,
  color : "#ab47bc",
  label : "Dibakar"
},
{
  value : <?php echo $getdata_act2->landfill; ?>,
  color : "#29b6f6",
  label : "Kirim Ke TPS"
},
{
  value : <?php echo $getdata_act3->discarded; ?>,
  color : "#ffa726",
  label : "Dibuang Sembarang"
},
{
  value : <?php echo $getdata_act4->other; ?>,
  color : "#8d6e63",
  label : "Lainnya",
}
];

var ctx = document.getElementById("action").getContext("2d");
var action = new Chart(ctx).Doughnut(data, options);
document.getElementById('legend-chart').innerHTML = action.generateLegend();

//grafik jenis sampah organik
var data = [
    {
      value : <?php echo $getdata_kind2->paper; ?>,
      color : "#ff5722",
      label : "Kertas"
    },
    {
      value : <?php echo $getdata_kind5->sisa; ?>,
      color : "#e91e63",
      label : "Sisa Makanan"
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
      animateScale: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + '%' %>"
    }

    var ctx = document.getElementById("kind-1").getContext("2d");
    var kind = new Chart(ctx).Doughnut(data, options);

    //grafik sampah anorganik

    var data = [
    {
      value: <?php echo $getdata_kind1->plastic; ?>,
      color:"#2196f3",
      label:"Plastik"
    },
    {
      value : <?php echo $getdata_kind3->glass; ?>,
      color : "#ffa000",
      label : "Kaca"
    },
    {
      value : <?php echo $getdata_kind4->logam; ?>,
      color : "#00bcd4",
      label : "logam"
    },
    {
      value : <?php echo $getdata_kind6->other; ?>,
      color : "#cfd8dc",
      label : "Lainnya"
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
      animateScale: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + '%' %>"
    }

    var ctx = document.getElementById("kind-2").getContext("2d");
    var kind = new Chart(ctx).Doughnut(data, options);

</script>
