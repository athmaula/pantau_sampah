<?php $this->load->view('navbaruser') ?>

<!--carousel-->
<section class="section-color">
<div class="container-fluid">
  <div id="tipsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row lebar-custom">
        <div class="col-xs-offset-3 col-xs-6">
          <div class="carousel-inner" role="listbox">
    <div class="item active">
        <div class="carousel-content">
            <div>
              <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                      <br/>
                      <i class="fa fa-4x fa-info wow bounceIn text-primary" style="color: #00695c;"></i>
                  </div>
              </div>
              <div class="col-lg-9 col-md-6 text-center">
                  <div class="service-box">
                      <h1>What Pantau Sampah ?</h3>
                      <h4 class="text-muted">This application is collaboration idea from two student who aware the risk of not manage our garbage correctly. They believe unless someone start cares about garbage problem NOTHING is going to get better. They start to thing what kind of action they can make to make people aware about this problem. Because their basic is tecnology engineering, the first idea comes to their mind is application. They invent application that able to count user production of garbage, calculate it and serve it as interesting as they can. This way they provide real time data. </h4>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <?php foreach ($get as $row) { ?>
    <div class="item">
        <div class="carousel-content">
            <div>
              <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box">
                      <br/>
                      <i class="fa fa-4x fa-pencil wow bounceIn text-primary"></i>
                  </div>
              </div>
              <div class="col-lg-9 col-md-6 text-center">
                  <div class="service-box">
                      <h3><?php echo $row->title ?></h3>
                      <p class="text-muted"><?php echo $row->content ?></p>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <?php } ?>
  </div></div>
</div></div>


    <a class="left carousel-control" href="#tipsCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#tipsCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

</div>
</section>
<!--ends of carousel-->

<!--Grafik per minggu-->
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><br/><br/>Grapich Garbage Productivity</h2>
          <hr class="primary">
        </div>
      </div>
    </div>
    <div class="container text-center">
      <canvas id="weeks" width="300" height="400"></canvas>
    </div>
    <br/><br/><br/>
</section>
<!-- end grafik per minggu-->

<section class="section-color">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><br/><br/>Grapich Garbage Productivity</h2>
          <hr class="primary">
        </div>
      </div>
    </div>
    <div class="container text-center">
      <canvas id="diagram" width="600" height="400"></canvas>
    </div>
    <br/><br/><br/>
</section>

<!--grafik jenis sampah-->
<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><br/><br/>Grapich Garbage Type</h2>
          <hr class="primary">
        </div>
      </div>
    </div>
    <div class="container text-center">
      <canvas id="kind" width="300" height="300"></canvas>
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
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
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

  var kind = document.getElementById("kind").getContext("2d");
  new Chart(kind).Doughnut(data);

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
