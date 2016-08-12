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
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tips">Tips</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Fitur</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
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
                <p>Merupakan sebuah aplikasi yang dapat menghitung jumlah pengeluaran sampah pengguna dan mengakumulasikan dengan pengeluaran sampah orang lain. harapannya kita dapat belajar seberapa banyak sampah yang telah diproduksi di kota dan kita tahu apa yang akan terjadi pada sampah tersebut</p>
                <a href="<?php echo site_url('file/register'); ?>" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-user fa-lg"></i> Daftar Sekarang</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="tips">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="row">
                            <div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-8 col-sm-6 col-md-6 col-lg-6">
                                <div class="carousel-inner" role="listbox" id="item-carousel-homepage">
                                    <div class="item active">
                                        <div class="carousel-content">
                                            <div class="col-xs-offset-4 col-sm-offset-0 col-lg-offset-3 col-md-offset-4 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <h1>Tahukah Anda ?</h1>
                                                <h4> Sterofoam tidak bisa terurai secara alami ... </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach ($tips_homepage as $row) { ?>
                                    <div class="item">
                                        <div class="carousel-content">
                                            <div class="col-xs-offset-4 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <h1><?php echo $row->title; ?></h1>
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
                    <h2 class="section-heading">Fitur Pantau Sampah</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <span class="service-box">
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
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="service-box">
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
                    </span>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <span class="service-box">
                        <img src="<?php echo base_url();?>asset/img/tips.png" class="img-responsive img-service" alt="">
                        <div class="service-box-caption">
                            <div class="service-box-caption-content">
                                <div class="project-category text-faded">
                                    Tips
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tentang Pantau Sampah</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-comment-o wow bounceIn text-primary"></i>
                        <h3>Apa itu Pantau Sampah ?</h3>
                        <p class="text-muted">Pantau Sampah adalah sebuah project yang terdedikasikan untuk menghimbah masyarakat tentang bagaimana bahaya yang ditimbulkan dari sampah. Sebuah solusi untuk mengatasi sampah dengan baik. Seperti kita membuang sampah ke tempat sampah, memilah sampah berdasarkan jenisnya , dan mendaur ulang. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-line-chart wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Apa Fungsinya ?</h3>
                        <p class="text-muted">Aplikasi ini dapat membantu masyarakat menghitung jumlah pengeluaran sampah mereka dan mengakumulasi dengan pengeluaran sampah orang lain. harapannya kita dapat belajar seberapa banyak sampah yang telah diproduksi di kota dan kita tahu apa yang akan terjadi pada sampah tersebut.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-thumbs-o-up wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Tips Berguna dari Pantau Sampah</h3>
                        <p class="text-muted">Kami menyediakan informasi dan fakta seputar sampah. Informasi yang kami berikan terbaru, jadi informasi tersebut up to date.dari informasi kami berharap masyarkat dapat lebih sadar bagaimana efek yang ditimbulkan dari sampah. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="about-box">
                        <i class="fa fa-4x fa-users wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Join Pantau Sampah</h3>
                        <p class="text-muted">Kami tidak bisa mengedukasi masyarakat bahaya dari sampah sendiri. bergabung dengan Pantau Sampah dapat membantu kita untuk memberitahu anda tentang bahaya sampah dan harapanya anda dapat menyebarkan informasi ke keluarga anda, teman anda, teman kuliah anda, dan tetangga anda. Mari selamatkan bumi kita!. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer') ?>