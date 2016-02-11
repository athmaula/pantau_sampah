<?php $this->load->view('navbar') ?>

<<<<<<< HEAD
<!--carousel-->
  <div id="myCarousel" class="carousel slide caousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../../asset/img/floor.jpg" alt="floor" class="img-responsive"/>
        <!--<div class="carousel-caption">
          <h3>FLOOR</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>-->
      </div>

      <div class="item">
        <img src="../../asset/img/city.jpg" alt="floor"class="img-responsive"/>
        <!--<div class="carousel-caption">
          <h3>CITY</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>-->
      </div>

      <div class="item">
        <img src="../../asset/img/space.jpg" alt="floor" class="img-responsive"/>
        <div class="carousel-caption">
          <!--<h3>SPACE</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>-->
      </div>
=======
      <div id="MyCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target ="#MyCarousel" data-slide-to ="0" class="active"></li>
          <li data-target ="#MyCarousel" data-slide-to ="1"></li>
          <li data-target ="#MyCarousel" data-slide-to ="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php base_url() ?>asset/img/floor.jpg" alt="floor" class="img-responsive">
            <div class="carousel-caption">
              <h3>FLOOR</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
          <div class="item">
            <img src="<?php base_url(); ?>asset/img/space.jpg" alt="floor" class="img-responsive">
              <div class="carousel-caption">
                <h3>SPACE</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              </div>
          </div>
          <div class="item">
            <img src="<?php base_url(); ?>asset/img/city.jpg" alt="floor" class="img-responsive">
              <div class="carousel-caption">
                <h3>City</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
          </div>
        </div>
        <a class="carousel-control left" data-slide="prev" href="#MyCarousel">
          <span class="icon-prev"></span>
        </a>
              <a class="carousel-control right" data-slide="next" href="#MyCarousel">
          <span class="icon-next"></span>
        </a>
>>>>>>> 5bb998435bb19c6b5b7e9999964dbf3e214584cd
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>-->
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>-->
    </a>
  </div>

<!--ends of carousel-->

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
  </body>
</html>
