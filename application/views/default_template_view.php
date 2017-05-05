<!doctype html>
<html lang="en">
    <head>
        <!-- META -->
        <meta charset="UTF-8">
        <meta name="author" content="Eyob Tariku <eyobtariku@gmail.com>">
        <meta name="description" content="Here goes description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- SITE TITLE -->
        <title>Addis Impression</title>

        <!-- FAVICON -->
        <link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon.png'); ?>">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon.png'); ?>" sizes="57x57">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon.png'); ?>" sizes="72x72">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon.png'); ?>" sizes="114x114">
		<link rel="icon" href="<?php echo base_url('assets/images/favicon/favicon.png'); ?>" sizes="144x144">

        <!-- STYLE -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!-- START PRELOADER -->
        <div id="preloader">
            <div class="loader">
                <div class="loader-container">
                    <div class="loader-border-top"></div>
                    <div class="loader-border-bottom"></div>
                </div>
                <div class="loader-square"></div>
            </div>
        </div>
        <!-- END OF PRELOADER -->
        <div class="wrapper">
            <!-- START HEADER TOP SECTION -->
            <div class="section header-top-section" id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact-info">
                                <p><i class="pe-7s-call"></i> +251-912-041749</p>
                                <p><i class="pe-7s-mail"></i> bisrat98@gmail.com</p>
                            </div>
                        </div><!-- END OF /. COL -->
                        <div class="col-sm-6">
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- END OF /. COL -->
                    </div><!-- END OF ROW -->
                </div><!-- END OF /. CONTAINER -->
            </div><!-- END OF /. HEADER TOP SECTION -->

            <!-- START HEADER SECTION -->
            <div class="header-section">
                <nav class="navbar">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                                <img src="<?php echo base_url('assets/images/logo-y.png'); ?>" class="img-responsive"  height="50" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="<?php echo site_url('pages/home'); ?>">HOME</a></li>
                                <li><a href="<?php echo site_url('pages/about'); ?>">ABOUT</a></li>
                                <li><a href="<?php echo site_url('pages/service'); ?>">SERVICE</a></li>
                                <li><a href="<?php echo site_url('pages/showcase'); ?>">Showcase</a></li>
                                <li><a href="<?php echo site_url('pages/contact'); ?>">CONTACT</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav><!-- END OF /. NAVBAR -->
            </div><!-- END OF /. HEADER TOP SECTION -->


            <!-- MAIN VIEW SECTION OF THE TEMPLATE -->
            <?php $this->load->view($main_view); ?>   

            <!-- START FOOTER TOP SECTION -->
            <div class="section footer-top-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 wow fadeInDown animated" data-wow-delay="0.2s">
                            <div class="widget">
                                <h3 class="headline">ABOUT US</h3>
                                <div class="widget-item">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                                </div><!-- END OF /. WIDGET ITEM -->
                            </div><!-- END OF /. WIDGET -->
                        </div><!-- END OF /. COLUMN -->
                        <div class="col-md-3 wow fadeInDown animated" data-wow-delay="0.4s">
                            <div class="widget">
                                <h3 class="headline">RECENT POST</h3>
                                <div class="widget-item">
                                    <ul>
                                        <li><a href="#">History of brooklyn</a></li>
                                        <li><a href="#">Penang street food</a></li>
                                        <li><a href="#">The mist of madagascar</a></li>
                                        <li><a href="#">J.R.R. tolkin</a></li>
                                        <li><a href="#">Morocco road trip</a></li>
                                        <li><a href="#">The noise - elixir</a></li>
                                    </ul>
                                </div><!-- END OF /. WIDGET ITEM -->
                            </div><!-- END OF /. WIDGET -->
                        </div><!-- END OF /. COLUMN -->
                        <div class="col-md-3 wow fadeInDown animated" data-wow-delay="0.6s">
                            <div class="widget">
                                <h3 class="headline">TOP COMMENTS</h3>
                                <div class="widget-item">
                                    <ul>
                                        <li><a href="#">Er zijn vele variaties van</a></li>
                                        <li><a href="#">van Lorem Ipsum beschikbaar</a></li>
                                        <li><a href="#">het merendeel heeft te lijden</a></li>
                                        <li><a href="#">van wijzigingen in een of</a></li>
                                        <li><a href="#">vorm, door ingevoegde humor</a></li>
                                        <li><a href="#">willekeu seloofwaardig ogen.</a></li>
                                    </ul>
                                </div><!-- END OF /. WIDGET ITEM -->
                            </div><!-- END OF /. WIDGET -->
                        </div><!-- END OF /. COLUMN -->
                        <div class="col-md-3 wow fadeInDown animated" data-wow-delay="0.8s">
                            <div class="widget">
                                <h3 class="headline">POPULAR TAGS</h3>
                                <div class="widget-item">
                                    <div class="tagcloud">
                                        <a href="#">Wordpress</a>
                                        <a href="#">HTML</a>
                                        <a href="#">Joomla</a>
                                        <a href="#">PSD</a>
                                        <a href="#">CSS</a>
                                        <a href="#">PHP</a>
                                        <a href="#">Javascript</a>
                                        <a href="#">Android</a>
                                        <a href="#">Clean</a>
                                        <a href="#">Free PSD</a>
                                        <a href="#">JS</a>
                                        <a href="#">Online aplication</a>
                                        <a href="#">Mozzilla</a>
                                        <a href="#">Jqurey</a>
                                        <a href="#">SEO</a>
                                        <a href="#">Facebook</a>
                                        <a href="#">CSS3</a>
                                    </div>
                                </div><!-- END OF /. WIDGET ITEM -->
                            </div><!-- END OF /. WIDGET -->
                        </div><!-- END OF /. COLUMN -->
                    </div><!-- END OF /. ROW -->
                </div><!-- END OF /. CONTAINER -->
            </div><!-- END OF /. FOOTER TOP -->

            <!-- START FOOTER SECTION -->
            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright &copy; <?php echo date('Y'); ?> Designed & Develop by : <a href="http://eyobofficial.github.io/">EyobOfficial</a>. All Rights Reserved. </p>
                            <a href="#top" class="top-button"></a>
                        </div><!-- END OF /. COLUMN -->
                    </div><!-- END OF /. ROW -->
                </div><!-- END OF /. CONTAINER -->
            </div><!-- END OF/. FOOTER SECTION -->

        </div><!-- END OF /. WRAPPER -->

       <!-- JQUERY LIBERY -->
       <script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"></script>
       <!-- BOOTSTRAP -->
       <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>
       <!-- APPEAR JS  -->
       <script src="<?php echo base_url('assets/js/jquery.appear.js'); ?>"></script>
       <!-- WAYPOINTS -->
       <script src="<?php echo base_url('assets/js/waypoints.min.js'); ?>"></script>
       <!-- CUSTOM JS -->
       <script src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
       <!-- ISOTOPE -->
       <script src="<?php echo base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
       <!-- PRETTY PHOTO -->
       <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
       <!-- OWL CAROSEL -->
       <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
       <!-- WOW JS -->
       <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
       <!-- CUSTOM JS -->
       <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

       <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

    </body>
</html>
