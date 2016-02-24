<?php $this->load->view('navbaruser') ?>

<!--carousel-->
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
                      <i class="fa fa-4x fa-pencil wow bounceIn text-primary"></i>
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

<div>
    <a class="left carousel-control" href="#tipsCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#tipsCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--ends of carousel-->

<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><br/><br/>Grapich Garbage Productivity</h2>
          <hr class="primary">
        </div>
      </div>
    </div>
    <div class="container">
      <canvas id="myCanvas" width="256" height="256">

      </canvas>
    </div>
</section>


        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>asset/plugin/chartjs/Chart.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      </body>
</html>

<?php $this->load->view('footer') ?>
