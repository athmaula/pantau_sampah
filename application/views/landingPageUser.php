<?php $this->load->view('navbaruser') ?>

<!--carousel-->
<section class="section-color">
<div class="container-fluid">
  <div id="tipsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators" >
      <li data-target="#tipsCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#tipsCarousel" data-slide-to="1"></li>
      <li data-target="#tipsCarousel" data-slide-to="2"></li>
    </ol>


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
                      <h1>Do you know?</h3>
                      <h4 class="text-muted">Cows in Kupang, NTT eat garbage from Alak Landfill. It's usuall now to find some
                        cow dead suddenly, because the cows eat nails, broken glass, or insect repellent.
                      </h4>
                  </div>
              </div>
            </div>
        </div>
    </div>
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
                      <h3>What Pantau Sampah function?</h3>
                      <p class="text-muted">This application can help people counting their own garbage and acoumulate it
                        with other's people garbage.
                      </p>
                  </div>
              </div>
            </div>
        </div>
    </div>
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
                      <h3>What Pantau Sampah function?</h3>
                      <p class="text-muted">This application can help people counting their own garbage and acoumulate it
                        with other's people garbage.
                      </p>
                  </div>
              </div>

            </div>
        </div>
    </div>
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
      <canvas id="weeks" width="600" height="400"></canvas>
    </div>
    <br/><br/><br/>
</section>
<!-- end grafik per minggu-->

<!--grafik jenis sampah-->
<section class="section-color">
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
var weekData = {
	labels : ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
	datasets : [
		{
			fillColor : "#b2dfdb",
			strokeColor : "#00796b",
			pointColor : "#fff",
			pointStrokeColor : "#004d40",
			data : [2,3,1,5.5,9,3.2,4.9]
		}
	]
}

var weeks = document.getElementById('weeks').getContext('2d');
new Chart(weeks).Line(weekData);

var data = [
  {
    value: 20,
    color:"#878BB6"
  },
  {
    value : 40,
    color : "#4ACAB4"
  },
  {
    value : 10,
    color : "#FF8153"
  },
  {
    value : 10,
    color : "#FF8153"
  },
  {
    value : 30,
    color : "#FFEA88"
  }
  ];

  var kind = document.getElementById("kind").getContext("2d");
  new Chart(kind).Doughnut(data);
</script>

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->


<?php $this->load->view('footer') ?>
