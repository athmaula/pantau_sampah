    <?php $this->load->view('header') ?>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Pantau Sampah</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tips">Tips</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('file/login'); ?>" title="Login Pantau Sampah"> <i class="fa fa-sign-in fa-lg"></i> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Pantau Sampah</h1>
                <hr>
                <p>This application can help people counting their own garbage and acoumulate it with other's people garbage. In return we will acquire how many garbage this city produce, and we will now what happend to that garbage.</p>
                <a href="<?php echo site_url('file/register'); ?>" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-user fa-lg"></i> Register Now !</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="tips">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="row">
                            <div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-8 col-sm-6 col-md-6 col-lg-6">
                                <div class="carousel-inner" role="listbox" id="item-carousel-homepage">
                                    <div class="item active">
                                        <div class="carousel-content">
                                            <div class="col-xs-offset-4 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <h1>Did You Know ?</h1>
                                                <h4> Styrofoam can't Straggling ... </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($tips_homepage as $row) { ?>
                                    <div class="item">
                                        <div class="carousel-content">
                                            <div class="col-xs-offset-4 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-6">
                                                <h1><strong><?php echo $row->title; ?></strong></h1>
                                                <h4><?php echo $row->content; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <a class="carousel-control left" data-slide="prev" href="#myCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="carousel-control right" data-slide="next" href="#myCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--ends of carousel-->
                </div>
            </div>
        </div>
    </section>

<section class="no-padding" id="service">
     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="service-box">
                        <img src="<?php echo base_url();?>asset/img/output-charts.png" class="img-responsive img-service" alt="">
                        <div class="service-box-caption">
                            <div class="service-box-caption-content">
                                <div class="project-category text-faded">
                                    Output
                                </div>
                                <div class="project-name">
                                    Chart
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="service-box">
                        <img src="<?php echo base_url();?>asset/img/output-data.png" class="img-responsive img-service" alt="">
                        <div class="service-box-caption">
                            <div class="service-box-caption-content">
                                <div class="project-category text-faded">
                                    Output
                                </div>
                                <div class="project-name">
                                    Data
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="service-box">
                        <img src="<?php echo base_url();?>asset/img/tips.png" class="img-responsive img-service" alt="">
                        <div class="service-box-caption">
                            <div class="service-box-caption-content">
                                <div class="project-category text-faded">
                                    Tips
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
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
                    <div class="about-box">
                        <i class="fa fa-4x fa-comment-o wow bounceIn text-primary"></i>
                        <h3>What is Pantau Sampah ?</h3>
                        <p class="text-muted">Pantau Sampah is our project, dedicated to warn people about how dangerous garbage can be.The solution is take care of the garbage carefully. Carefully means we throw garbage in garbage dump, sorting the chemical waste from household waste, and doing recycle. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-line-chart wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>What Pantau Sampah Function ?</h3>
                        <p class="text-muted">This application can help people counting their own garbage and acoumulate it with other's people garbage.In return we will acquire how many garbage this city produce, and we will now what happend to that garbage.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-thumbs-o-up wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Useful Tips From Pantau Sampah</h3>
                        <p class="text-muted">We provide information and fun fact about garbage. The information we provide will be update regulary, so the information will be up to date.From this information we hope people more aware about how garbage can affect our surrounding and our future. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-users wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Join Pantau Sampah</h3>
                        <p class="text-muted">We can't educate people about garbage hazard alone. Joining Pantau Sampah can help us tell you about garbage hazard and hopefully you will spread the information into your famiy, your friends, your collagues, and your neigbour. Let's save our earth. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer') ?>