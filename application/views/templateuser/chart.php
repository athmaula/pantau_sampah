<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1> Charts</h1>  
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('user');?>">Home</a></li>
      <li><a class="active">Chart</a></li>
    </ol>
    </section>
  <section class="content">
    <div class="row">
      <div class="col-md-7">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Produktifitas Anda</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="weeks" style="height:400px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-5">
        <div class="box box-solid box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Cara Pembuangan Sampah Anda</h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="action" style="height:320px"></canvas>
            </div>
            <div id="js-legend-1" class="chart-legend"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Jenis Sampah Yang Anda Buang</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">
              <div class="box box-solid box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Sampah Yang Anda Buang</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="jenis-bar"></canvas>
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

<?php $this->load->view('templateuser/footer'); ?>
<script>
  var data = {
    labels: ["Maksimum inputan", "Minimum inputan", "Rata-rata Inputan", "Inputan bulan ini"],
    datasets: [
    {
      label: "My First dataset",
      fillColor: "#36A2EB",
      strokeColor: "rgba(179,181,198,1)",
      highlightFill: "#36A2EB",
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
      barStrokeWidth: 4,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 4,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true,
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
    };

    var context = document.getElementById('weeks').getContext('2d');
    var clientsChart = new Chart(context).Bar(data, options);

    var data = {
    labels: ["Plastik", "Kertas", "Kaca", "Logam", "Sisa Makanan", "Lainnya"],
    datasets: [
    {
      label: "My First dataset",
      fillColor: "#4BC0C0",
      strokeColor: "rgba(179,181,198,1)",
      highlightFill: "#26a69a",
      highlightStroke: "rgba(220,220,220,1)",
      data: [<?php echo $getdata_totkind1->input_sampah; ?>,<?php echo $getdata_totkind2->input_sampah;?>,
      <?php echo $getdata_totkind3->input_sampah;?>, <?php echo $getdata_totkind4->input_sampah;?>,
       <?php echo $getdata_totkind5->input_sampah;?>, <?php echo $getdata_totkind6->input_sampah;?>]
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
      maintainAspectRatio: true,
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' Kilo' %>"
    };

    var context = document.getElementById('jenis-bar').getContext('2d');
    var clientsChart = new Chart(context).Bar(data, options);

    var data = [
    {
      value: <?php echo $getdata_cnt1->plastic; ?>,
      color:"#FF6384",
      label:"plastik"
    },
    {
      value : <?php echo $getdata_cnt2->paper; ?>,
      color : "#E7E9ED",
      label : "Kertas"
    },
    {
      value : <?php echo $getdata_cnt3->glass; ?>,
      color : "#FFCE56",
      label : "Kaca"
    },
    {
      value : <?php echo $getdata_cnt4->logam; ?>,
      color : "#FF8153",
      label : "logam"
    },
    {
      value : <?php echo $getdata_cnt5->leftover; ?>,
      color : "#4BC0C0",
      label : "Sisa Makanan"
    },
    {
      value : <?php echo $getdata_cnt6->other; ?>,
      color : "#4caf50",
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
      //tooltip
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + '%' %>"
    }

    var ctx = document.getElementById("kind").getContext("2d");
    var kind = new Chart(ctx).Doughnut(data, options);
    document.getElementById('js-legend').innerHTML = kind.generateLegend();

    var data = [
    {
      value : <?php echo $getdata_cnt2->paper; ?>,
      color : "#E7E9ED",
      label : "Kertas"
    },
    {
      value : <?php echo $getdata_cnt5->leftover; ?>,
      color : "#4BC0C0",
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

    var data = [
    {
      value: <?php echo $getdata_cnt1->plastic; ?>,
      color:"#FF6384",
      label:"Plastik"
    },
    {
      value : <?php echo $getdata_cnt3->glass; ?>,
      color : "#FFCE56",
      label : "Kaca"
    },
    {
      value : <?php echo $getdata_cnt4->logam; ?>,
      color : "#FF8153",
      label : "logam"
    },
    {
      value : <?php echo $getdata_cnt6->other; ?>,
      color : "#4caf50",
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

    var data = [
    {
      value: <?php echo $getdata_action1->input_sampah;?>,
      color:"#FF6384",
      label:"Dibakar"
    },
    {
      value : <?php echo $getdata_action2->input_sampah?>,
      color : "#36A2EB",
      label : "Di Serahkan TPS"
    },
    {
      value : <?php echo $getdata_action3->input_sampah; ?>,
      color : "#FFCE56",
      label : "Dibuang Sembarang"
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
      tooltipTemplate: "<%if (label){%><%=label%> : <%}%><%= value + ' kilo' %>"
    }

    var ctx = document.getElementById("action").getContext("2d");
    var kind = new Chart(ctx).Doughnut(data, options);
    document.getElementById('js-legend-1').innerHTML = kind.generateLegend();

  </script>
