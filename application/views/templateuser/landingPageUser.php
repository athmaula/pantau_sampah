<?php $this->load->view('navbaruser') ?>

<!--carousel-->
<section class="section-color carousel">
  <div class="row">
    <div class="col-sm-12">
      <div class="container-fluid">
        <div id="tipsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
         <div class="row tengah">
          <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
                            <h1>What is Pantau Sampah ?</h1>
                            <h4>Pantau Sampah is our project, dedicated to warn people about how dangerous garbage can be.</h4>
                        </div>
                    </div>
                </div>
                <?php foreach ($get as $row) { ?>
                <div class="item">
                    <div class="carousel-content">
                        <div>
                            <h1><strong><?php echo $row->title; ?></strong></h1>
                            <h4><?php echo $row->content; ?></strong></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!--ends of carousel-->
<section class="bar background-image-fixed no-mb color-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>

<section class="char">
      <div class="row">
        <h2 class="text-center">Grapich Garbage Productivity</h2>
        <hr class="primary">
        <div class="col-md-5 col-md-offset-1">
            <div class="container">
              <canvas id="diagram" width="600" height="400"></canvas>
            </div>
          </div>
          <!--Grafik per inputan-->
          <div class="col-md-6">
            <div class="container">
              <canvas id="weeks" width="500" height="400"></canvas>
            </div>
          </div>
      </div>
</section>
<!-- end grafik per inputan-->
<section class="bar background-image-fixed-2 no-mb color-white text-center">
    <div class="dark-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>"Do you Know, Styrofoam can't straggling.."</h2>
                <p class="lead"> - Fact - </p>
            </div>
        </div>
    </div>
</section>

<!--grafik jenis sampah-->
<section>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="text-center">Grapich Garbage Type</h2>
          <hr class="primary">
          <div class="text-center">
            <canvas id="kind" width="300" height="300"></canvas>
          </div>
          <div id="js-legend" class="chart-legend"></div>
        </div>
      </div>
    </div>
    <br/><br/>
</section>

<!--end grafik jenis sampah-->

<script>
var data = {
    labels: ["Maximum your input", "Minimum yout input", "Average your Input"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "#42a5f5",
            strokeColor: "#1e88e5",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,  <?php echo $getdata_min->input_sampah; ?> , <?php echo $getdata_avg->input_sampah;?>]
        }
    ]
};

var context = document.getElementById('weeks').getContext('2d');
var clientsChart = new Chart(context).Bar(data);

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
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
  }

  var ctx = document.getElementById("kind").getContext("2d");
  var kind = new Chart(ctx).Doughnut(data, options);
  document.getElementById('js-legend').innerHTML = kind.generateLegend();

var weekData = {
  labels : [<?php $no=0; foreach ($getdata_input as $row) {
                  $no++;
                  echo $no.',';
                    } ?>],
  datasets : [
    {
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

var weeks = document.getElementById('diagram').getContext('2d');
new Chart(weeks).Line(weekData);

</script>

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->


<?php $this->load->view('footer') ?>
