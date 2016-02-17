<?php $this->load->view('navbar') ?>

<!--carousel-->
  <div id="myCarousel" class="carousel slide carousel-fade latar" data-ride="carousel">
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
          <div class="carousel-inner" role="listbox">
    <div class="item active">
        <div class="carousel-content">
            <div>
                <h3>#1</h3>
                <p>This is a twitter bootstrap carousel that only uses text. There are no images in the carousel slides.</p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="carousel-content">
            <div>
                <h3>#2</h3>
                <p>This is another much longer item. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, sint fuga temporibus nam saepe delectus expedita vitae magnam necessitatibus dolores tempore consequatur dicta cumque repellendus eligendi ducimus placeat! Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa quaerat?</p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="carousel-content">
            <div>
                <h3>#3</h3>
                <p>This is the third item.</p>
            </div>
        </div>
    </div>
  </div></div>
</div></div>

    <!--div class="carousel-inner" role="listbox">
      <div class="item active">
        <p>Test haha</p>
      </div>

      <div class="item">
        <img src="../../asset/img/city.jpg" alt="floor"class="img-responsive"/>
      </div>

      <div class="item">
        <img src="../../asset/img/space.jpg" alt="floor" class="img-responsive"/>
      </div>
    </div-->

<div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--ends of carousel-->

<section id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About Pantau Sampah</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-pencil wow bounceIn text-primary"></i>
                    <h3>What is Pantau Sampah?</h3>
                    <p class="text-muted">Pantau Sampah is our project, dedicated to warn people about how dangerous
                      garbage can be. The solution is take care of the garbage carefully. Carefully means we throw garbage in
                      garbage dump, sorting the chemical waste from household waste, and doing recycle.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-rocket wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    <h3>What Pantau Sampah function?</h3>
                    <p class="text-muted">This application can help people counting their own garbage and acoumulate it
                      with other's people garbage. In return we will acquire how many garbage this city produce, and we will now
                      what happend to that garbage.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-gift wow bounceIn text-primary" data-wow-delay=".2s"></i>
                    <h3>Useful Tips from Pantau Sampah</h3>
                    <p class="text-muted">We provide information and fun fact about garbage. The information we provide will be update
                      regulary, so the information will be up to date.From this information we hope people more aware about how garbage
                      can affect our surrounding and our future.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-group wow bounceIn text-primary" data-wow-delay=".3s"></i>
                    <h3>Join Pantau Sampah now</h3>
                    <p class="text-muted">We can't educate people about garbage hazard alone. Joining Pantau Sampah can help us
                      tell you about garbage hazard and hopefully you will spread the information into your famiy, your friends,
                      your collagues, and your neigbour. Let's save our earth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      </body>
</html>

<?php $this->load->view('footer') ?>
