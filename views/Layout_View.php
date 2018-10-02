<?php
$root = $_SERVER['DOCUMENT_ROOT'];

class Layout_View
{
    private $data;
    private $section;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    /**
     * function printHTMLPage
     *
     * Prints the content of the whole Web Site
     *
     * @param head 	(string) Is the head of the HTML structure
     * @param header 	(string) Is the menu and logo section
     * @param bodyType	(string) Is for CSS purposes
     * @param body	(string) Content of the Web Site
     *
     */
    
    public function printHTMLPage($section)
    {
        $this->section = $section;
        ?>
        <!DOCTYPE html>
        <html class="wow-animation" lang="en">

            <head>
                <title>Intense Dental Clinic</title>
                <meta charset="utf-8">
                <meta name="format-detection" content="telephone=no">
                <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
                <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                <meta name="keywords" content="intense web design multipurpose template">
                <meta name="date" content="Dec 26">
                <link rel="icon" href="images/favicon.ico" type="image/x-icon">
                <?php echo self::getCommonStyle(); ?>
            </head>
            <body>
                <div class="page text-center">
                
                <?php echo self::getPage(); ?>
               
                
                <!-- Page Head-->
                <header class="page-head">
                    <?php echo self::getMainMenu(); ?>
                    <?php echo self::getIndexSliders(); ?>
                </header>
                <main class="page-content">
                    <?php echo self::getWelcome(); ?>
                    <?php echo self::getIndexColumn(); ?>
                    <?php echo self::getIndexServices(); ?>
                    <?php echo self::getTestimonials(); ?>
                    <?php echo self::getParallax(); ?>
                    <?php echo self::getBlog(); ?>
                </main>
                <?php echo self::getFooter(); ?>
                <?php echo self::getCommonScripts(); ?>
                </div>
                
            </body>
        </html>
        <?php
    }
    
    public function getPage()
    {
        ob_start();
        ?>
    <body>
        <div class="ie-panel">
                    <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
                </div>
                <div class="page text-center">
                    <div class="page-loader page-loader-variant-1">
                        <div>
                            <img width='329' height='67' src='/images/logo-big.png' alt='' />
                            <div class="offset-top-41 text-center">
                                <div class="spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </body>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    
    public function getCommonStyle()
    {
        ob_start();
        ?>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700?CUbuntu:400,700">
        <link rel="stylesheet" href="/css/style.css">
        <style>
            .ie-panel {
                display: none;
                background: #212121;
                padding: 10px 0;
                box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
                clear: both;
                text-align: center;
                position: relative;
                z-index: 1;
            }

            html.ie-10 .ie-panel,
            html.lt-ie-10 .ie-panel {
                display: block;
            }
        </style>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getCommonScripts()
    {
        ob_start();
        ?>
        <!-- Java script-->
        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    

    public function getMainMenu()
    {
        ob_start();
        ?>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-top-panel rd-navbar-light" data-lg-stick-up-offset="79px" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                <div class="container">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-top-panel">
                            <div class="left-side">
                                <ul class="list-inline list-inline-sm list-inline-white text-darker">
                                    <li class="list-inline-item">
                                        <a class="text-dark fa fa-facebook" href="index.html#"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-dark fa fa-twitter" href="index.html#"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-dark fa fa-google-plus" href="index.html#"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-dark fa fa-youtube" href="index.html#"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-dark fa fa-linkedin" href="index.html#"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="center">
                                <address class="contact-info text-left"><span><span class="icon mdi mdi-map-marker"></span><a class="text-middle p text-dark" href="index.html#">4578 Marmora St, San Francisco D04 89GR</a></span></address>
                            </div>
                            <div class="right-side">
                                <address class="contact-info text-left"><span><span class="icon mdi mdi-cellphone-android"></span><a class="text-middle p font-weight-bold text-dark" href="tel:#">1-800-1234-567</a> <span class="p text-info text-middle">Call me please!</span></span></address>
                            </div>
                        </div>
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Top Panel Toggle-->
                            <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a href="../index.html"><img width='240' height='31' src='images/logo-dark.png' alt='' /></a>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand">
                                        <a href="../index.html"><img width='240' height='31' src='images/logo-dark.png' alt='' /></a>
                                    </div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="active"><a href="index.html"><span>Home</span></a>
                                        </li>
                                        <li><a href="about-us.html"><span>About</span></a>
                                        </li>
                                        <li><a href="services.html"><span>Services</span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="single-service.html"><span class="text-middle">General and Preventative Care</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Cosmetic Solutions</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Restorative Solutions</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Additional Treatments</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Orthodontics</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Dentures &amp; Denture Repair</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Diagnostic &amp; Preventative</span></a>
                                                </li>
                                                <li><a href="single-service.html"><span class="text-middle">Single Service</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="schedule.html"><span>Schedule</span></a>
                                        </li>
                                        <li><a href="blog.html"><span>News</span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="blog-single-post.html"><span class="text-middle">Single Blog Post</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contacts.html"><span>Contacts</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getWelcome()
    {
        ob_start();
        ?>
            
            <!-- Welcome to Intense-->
            <section class="section-98 section-md-110">
                <div class="container">
                    <div class="row justify-content-sm-center align-items-sm-center">
                        <!-- Simple quote Slider-->
                        <div class="col-md-9 col-xl-6 order-xl-6">
                            <div class="owl-carousel owl-carousel-classic owl-carousel-class-light shadow-drop-md" data-items="1" data-nav="false" data-dots="false" data-nav-custom=".owl-custom-navigation">
                                <div>
                                    <!-- Media Elements-->
                                    <div class="embed-responsive embed-custom-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o6-Iui7NQj8?wmode=transparent"></iframe>
                                    </div>
                                </div>
                                <div><img class="img-fluid element-fullwidth" src="images/home-05-525x350.jpg" width="525" height="350" alt=""></div>
                                <div><img class="img-fluid element-fullwidth" src="images/home-04-525x350.jpg" width="525" height="350" alt=""></div>
                            </div>
                        </div>
                        <div class="col-md-9 col-xl-6 col-xl-pull-6 text-xl-left offset-top-66 offset-xl-top-0 inset-xl-right-30">
                            <h1>Welcome to Intense</h1>
                            <hr class="divider bg-mantis hr-xl-left-0">
                            <p class="offset-top-50 text-md-left">Dr. Mark Hoffman's dental clinic welcomes you! We're glad you decided to become our customer for resolving your dental health concerns.</p>
                            <p class="text-md-left">Our main long-term goal is always achieving complex results for your dental health. But in the process, we also keep the focus on giving you the best customer service. We're always making our dental office as safe place as possible!</p>
                            <div class="owl-custom-navigation owl-customer-navigation offset-top-24">
                                <div class="owl-nav">
                                    <div class="owl-prev mdi mdi-chevron-left" data-owl-prev></div>
                                    <div class="owl-next mdi mdi-chevron-right" data-owl-next></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getIndexServices()
    {
        ob_start();
        ?>

        <section class="section-98 section-md-top-110 section-md-bottom-124">
                <div class="container container-wide">
                    <h1>Our Services</h1>
                    <hr class="divider bg-mantis">
                    <p class="offset-top-50">We’re pleased to offer a wide range of dental services</p>
                    <div class="row justify-content-sm-center offset-top-66 text-md-left">
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-01-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">General and Preventive Care</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-md-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-02-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Cosmetic Dentistry</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-03-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Restorative Dentistry</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-04-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Additional Treatments</a></h5>
                        </div>
                        <!-- next range-->
                        <div class="row-spacer d-none d-xxl-inline-block offset-top-66"></div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-05-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Orthodontics</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-06-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Pediatric Dentistry</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-07-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Dentures & Denture Repair</a></h5>
                        </div>
                        <div class="col-sm-10 col-md-6 col-xl-5 col-xxl-3 offset-top-50 offset-xxl-top-0">
                            <a class="thumbnail-classic" href="single-service.html" target="_self">
                                <figure><img width="420" height="310" src="images/service-08-420x310.jpg" alt="" />
                                </figure>
                            </a>
                            <h5 class="text-info"><a href="single-service.html">Diagnostics</a></h5>
                        </div>
                    </div>
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
                            <div class="inset-left-20 inset-right-20 inset-xxl-left-50 inset-xxl-right-50"><a class="btn btn-block btn-primary" href="services.html">view all services</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container container-wide">
                <hr class="hr bg-gray">
            </div>
        
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
        
    }
    
    public function getIndexColumn()
    {
        ob_start();
        ?>

        <section class="section-98 section-md-110 bg-polar">
                <div class="container">
                    <h1>Why choose Intense?</h1>
                    <hr class="divider bg-mantis">
                    <div class="row justify-content-sm-center text-lg-left offset-top-50 offset-xl-top-66">
                        <div class="col-md-9 col-lg-4 offset-xl-0">
                            <!-- Icon Box Type 3-->
                            <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                                <div class="unit-left"><span class="icon text-middle icon-xs text-info mdi mdi-monitor"></span></div>
                                <div class="unit-body">
                                    <h4 class="text-spacing-60 text-uppercase font-weight-bold">APPOINTMENT</h4>
                                </div>
                            </div>
                            <p class="offset-top-10 text-center text-sm-left">The first step towards a beautiful, healthy smile is to schedule an appointment. Please contact our office by phone or complete the appointment request form.</p>
                        </div>
                        <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
                            <!-- Icon Box Type 3-->
                            <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                                <div class="unit-left"><span class="icon text-middle icon-xs text-info mdi mdi-coin"></span></div>
                                <div class="unit-body">
                                    <h4 class="text-spacing-60 text-uppercase font-weight-bold">THE BEST PRICES </h4>
                                </div>
                            </div>
                            <p class="offset-top-10 text-center text-sm-left">Excellent care and high quality implant teeth at a price that any one can afford , making dental implant costs more accessible. Finally, great quality with a great price!</p>
                        </div>
                        <div class="col-md-9 col-lg-4 offset-xl-0 offset-top-50 offset-lg-top-0">
                            <!-- Icon Box Type 3-->
                            <div class="unit align-items-center unit-spacing-xs unit-xs flex-sm-row text-center text-sm-left">
                                <div class="unit-left"><span class="icon text-middle icon-xs text-info mdi mdi-magnify"></span></div>
                                <div class="unit-body">
                                    <h4 class="text-spacing-60 text-uppercase font-weight-bold">EXPERTISE</h4>
                                </div>
                            </div>
                            <p class="offset-top-10 text-center text-sm-left">Our team of more than 20 professionals have trained in the UK and abroad, creating a highly skilled, friendly and multi-lingual team to best serve our patients’ needs.</p>
                        </div>
                    </div>
                </div>
            </section>
        
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
        
    }
    
    public function getTestimonials()
        {
        ob_start();
        ?>
         <section class="section-98 section-md-110">
                <div class="container">
                    <h1>Testimonials</h1>
                    <hr class="divider bg-mantis">
                    <div class="row justify-content-sm-center offset-top-66">
                        <div class="col-md-9 col-lg-4">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p>
                                        <q>Just a quick note to say thank you so much for the care you took over my appointment today. I am very grateful for your high standard of care.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-alex-ross-80x80.jpg" alt="" /></div>
                                        <div class="unit-body unit-item-wide">
                                            <h6 class="quote-author text-uppercase">
                                                <cite class="text-normal">Alex Ross</cite>
                                            </h6>
                                            <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-9 col-lg-4 offset-top-41 offset-lg-top-0">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p>
                                        <q>I needed clarification after the appointment and felt at ease to email him and received a fast response.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-john-more-80x80.jpg" alt="" /></div>
                                        <div class="unit-body unit-item-wide">
                                            <h6 class="quote-author text-uppercase">
                                                <cite class="text-normal">john more</cite>
                                            </h6>
                                            <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="col-md-9 col-lg-4 offset-top-41 offset-lg-top-0">
                            <blockquote class="quote quote-classic">
                                <div class="quote-body">
                                    <p>
                                        <q>Thank you so much for fitting us in today, don't know what we'd have done without you. My daughter is quite timid, but your doctor was brilliant with her.</q>
                                    </p>
                                    <div class="quote-meta unit flex-row unit-spacing-sm align-items-center">
                                        <div class="unit-left unit-item-narrow"><img class="rounded-circle quote-img" width="80" height="80" src="images/user-alisa-milano-80x80.jpg" alt="" /></div>
                                        <div class="unit-body unit-item-wide">
                                            <h6 class="quote-author text-uppercase">
                                                <cite class="text-normal">alisa milano</cite>
                                            </h6>
                                            <p class="quote-desc text-uppercase text-info">Ceo/Founder at demolink.com</p>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getParallax()
    {
        ob_start();
        ?>

        <section class="context-dark">
                <div class="section parallax-container" data-parallax-img="images/background-02-1920x955.jpg">
                    <div class="parallax-content">
                        <div class="bg-overlay-info">
                            <div class="container section-top-66 section-bottom-66 section-xl-bottom-0">
                                <div class="row justify-content-sm-center align-items-sm-center">
                                    <div class="col-md-10 col-lg-11 col-xl-4 text-md-left section-xl-bottom-85">
                                        <h1>We can help you!</h1>
                                        <h5 class="text-regular offset-top-50">We offer a wide range of procedures to help you get that perfect smile.</h5><a class="btn btn-primary offset-top-10" href="schedule.html">BOOK AN APPOINTMENT</a>
                                    </div>
                                    <div class="col-xl-4"><img class="d-none d-xl-block" src="images/home-06-332x418.png" width="332" height="418" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getBlog()
    {  
        
        ob_start();
        ?>
        <section class="section-top-98 section-md-top-110">
                <div class="container container-wide">
                    <h1>Featured News</h1>
                    <hr class="divider bg-mantis">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-9 col-xl-4">
                            <!-- Post Wide-->
                            <article class="post post-wide">
                                <!-- Post Media-->
                                <header class="post-media">
                                    <div data-lightgallery="group">
                                        <a class="thumbnail-classic" href="blog-single-post.html" target="_self">
                                            <figure><img width="700" height="395" src="images/blog-01-570x320.jpg" alt="" />
                                            </figure>
                                        </a>
                                    </div>
                                </header>
                                <!-- Post Content-->
                                <section class="post-content text-left">
                                    <!-- Post Title-->
                                    <div class="post-title">
                                        <h3 class="text-info"><a href="blog-single-post.html">First Signs of Gum Disease</a></h3>
                                    </div>
                                    <!-- Post Meta-->
                                    <div class="post-meta text-dark small">
                                        <p>Post by: &nbsp;John Doe on&nbsp;
                                            <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="index.html#">Dental News</a>
                                        </p>
                                    </div>
                                    <!-- Post Body-->
                                    <div class="post-body offset-top-20">
                                        <p>If you have been told you have periodontal (gum) disease, you’re not alone. Many adults in the U.S. currently have some form of the disease that can often be dangerous.</p>
                                    </div>
                                    <!-- Posts controls-->
                                    <div class="post-controls text-right offset-top-30">
                                        <ul class="list-inline list-inline-sm">
                                            <li class="list-inline-item"><a class="btn-more" href="blog-single-post.html"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right"></span></a></li>
                                        </ul>
                                    </div>
                                </section>
                            </article>
                        </div>
                        <div class="col-sm-9 col-xl-4 offset-top-66 offset-xl-top-0">
                            <!-- Post Wide-->
                            <article class="post post-wide">
                                <!-- Post Media-->
                                <header class="post-media">
                                    <div data-lightgallery="group">
                                        <a class="thumbnail-classic" href="blog-single-post.html" target="_self">
                                            <figure><img width="700" height="395" src="images/blog-02-570x320.jpg" alt="" />
                                            </figure>
                                        </a>
                                    </div>
                                </header>
                                <!-- Post Content-->
                                <section class="post-content text-left">
                                    <!-- Post Title-->
                                    <div class="post-title">
                                        <h3 class="text-info"><a href="blog-single-post.html">Basic Dental Care</a></h3>
                                    </div>
                                    <!-- Post Meta-->
                                    <div class="post-meta text-dark small">
                                        <p>Post by: &nbsp;John Doe on&nbsp;
                                            <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="index.html#">Dental News</a>
                                        </p>
                                    </div>
                                    <!-- Post Body-->
                                    <div class="post-body offset-top-20">
                                        <p>Today we would like to speak about basic dental care, a set of procedures which involves brushing and flossing your teeth regularly, as well as visiting your local dentist regularly.</p>
                                    </div>
                                    <!-- Posts controls-->
                                    <div class="post-controls text-right offset-top-30">
                                        <ul class="list-inline list-inline-sm">
                                            <li class="list-inline-item"><a class="btn-more" href="blog-single-post.html"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right"></span></a></li>
                                        </ul>
                                    </div>
                                </section>
                            </article>
                        </div>
                        <div class="col-sm-9 col-xl-4 offset-top-66 offset-xl-top-0">
                            <!-- Post Wide-->
                            <article class="post post-wide">
                                <!-- Post Media-->
                                <header class="post-media">
                                    <div data-lightgallery="group">
                                        <a class="thumbnail-classic" href="blog-single-post.html" target="_self">
                                            <figure><img width="700" height="395" src="images/blog-03-570x320.jpg" alt="" />
                                            </figure>
                                        </a>
                                    </div>
                                </header>
                                <!-- Post Content-->
                                <section class="post-content text-left">
                                    <!-- Post Title-->
                                    <div class="post-title">
                                        <h3 class="text-info"><a href="blog-single-post.html">Dry Mouth</a></h3>
                                    </div>
                                    <!-- Post Meta-->
                                    <div class="post-meta text-dark small">
                                        <p>Post by: &nbsp;John Doe on&nbsp;
                                            <time datetime="2018-01-01">15 Feb 2018</time>&nbsp;in&nbsp;<span class="d-block d-sm-inline"></span><a href="index.html#">Dental News</a>
                                        </p>
                                    </div>
                                    <!-- Post Body-->
                                    <div class="post-body offset-top-20">
                                        <p>Dry mouth is a syndrome of saliva lack in your mouth. It happens when a mouth gets dry and uncomfortable. Fortunately, many treatments can help against it.</p>
                                    </div>
                                    <!-- Posts controls-->
                                    <div class="post-controls text-right offset-top-30">
                                        <ul class="list-inline list-inline-sm">
                                            <li class="list-inline-item"><a class="btn-more" href="blog-single-post.html"><span class="text-middle font-weight-bold text-uppercase inset-right-8">read more</span><span class="text-middle icon icon-xxs mdi mdi-arrow-right"></span></a></li>
                                        </ul>
                                    </div>
                                </section>
                            </article>
                        </div>
                    </div>
                    <div class="row justify-content-sm-center offset-top-66">
                        <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 col-xxl-3">
                            <div class="inset-left-20 inset-right-20 inset-xxl-left-50 inset-xxl-right-50"><a class="btn btn-block btn-primary" href="blog.html">view all news</a></div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
        
    
    
        
    
    
    
    
    public function getFooter()
    {
        ob_start();
        ?>
        <!-- Footer variant 3-->
        <footer class="section-relative section-top-66 section-bottom-34 page-footer">
            <div class="container">
                <div class="row justify-content-md-center text-xl-left">
                    <div class="col-md-12">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-10 col-md-3 text-left order-md-4 col-md-10 col-xl-3 offset-md-top-50 offset-xl-top-0 order-xl-2 offset-xl-top-10">
                                <!-- Twitter Feed-->
                                <!--
                                <p class="text-uppercase text-spacing-60 font-weight-bold text-center text-xl-left">Twitter Feed</p>
                                <div class="offset-top-20">
                                    <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                                        <div class="twitter-sm" data-twitter-type="tweet">
                                            <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                                            </div>
                                            <div class="twitter-text" data-tweet="text"></div>
                                            <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                                        </div>
                                        <div class="twitter-sm" data-twitter-type="tweet">
                                            <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                                            </div>
                                            <div class="twitter-text" data-tweet="text"></div>
                                            <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <div class="col-sm-10 col-md-3 offset-top-66 order-md-3 col-md-10 offset-xl-top-0 col-md-6 col-xl-2 order-xl-4 offset-xl-top-10">
                                <h6 class="text-uppercase text-spacing-60 text-center text-xl-left">Flickr</h6>
                                <!--
                                <div class="offset-xl-top-30">
                                    <div class="group-xs flickr widget-flickrfeed" data-lightgallery="group" data-flickr-tags="tm58888_landscapes">
                                        <a class="flickr-item thumbnail-classic" data-lightgallery="item" href="index.html" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                                        <a class="flickr-item thumbnail-classic" data-lightgallery="item" href="index.html" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                                        <a class="flickr-item thumbnail-classic" data-lightgallery="item" href="index.html" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                                        <a class="flickr-item thumbnail-classic" data-lightgallery="item" href="index.html" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                                    </div>
                                </div>-->
                            </div>
                            <div class="col-sm-10 col-md-3 offset-top-66 order-md-2 col-md-6 col-xl-4 offset-md-top-0 order-xl-3 offset-xl-top-10">
                                <h6 class="text-uppercase text-spacing-60 text-center text-lg-left">What people say</h6>
                                <div class="offset-xl-top-30">
                                    <!-- Simple quote Slider-->
                                    <div class="owl-carousel owl-carousel-classic owl-carousel-class-light owl-carousel-simple-quote" data-items="1" data-nav="false" data-dots="true" data-margin="5">
                                        <div>
                                            <blockquote class="quote quote-simple-2 text-left">
                                                <p class="text-darker quote-body offset-bottom-0">
                                                    <q>Thank you for your extraordinary dental service! You helped me to get rid of gum disease and mouth cavity inflammation I had suffered.</q>
                                                </p>
                                                <h6 class="quote-author text-uppercase text-dark">
                                                    <cite class="font-default text-normal">- John Doe</cite>
                                                </h6>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote class="quote quote-simple-2 text-left">
                                                <p class="text-darker quote-body offset-bottom-0">
                                                    <q>I am glad I’ve purchased a template from TemplateMonster. Extraordinary customer service, always available.</q>
                                                </p>
                                                <h6 class="quote-author text-uppercase text-dark">
                                                    <cite class="font-default text-normal">- July Mao</cite>
                                                </h6>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="offset-top-20 text-sm-center text-lg-left">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="index.html#"></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="index.html#"></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="index.html#"></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="index.html#"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                                <!-- Footer brand-->
                                <div class="footer-brand">
                                    <a href="index.html"><img width='138' height='52' src='images/logo.png' alt='' /></a>
                                </div>
                                <address class="contact-info offset-top-20 p">
                    <div>
                      <dl>
                        <dt class="font-weight-bold">Address:</dt>
                        <dd class="text-dark d-xl-block">4578 Marmora St, <span class="d-xl-block">San Francisco</span> <span class="d-xl-block">D04 89GR.</span></dd>
                      </dl>
                    </div>
                    <div>
                      <dl class="offset-top-0">
                        <dt class="font-weight-bold">Telephone:</dt>
                        <dd><a class="text-dark" href="tel:#">1-800-1234-567</a></dd>
                      </dl>
                    </div>
                    <div>
                      <dl class="offset-top-0">
                        <dt class="font-weight-bold">E-mail:</dt>
                        <dd><a class="text-dark" href="mailto:#">mail@demolink.org</a></dd>
                      </dl>
                    </div>
                  </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container offset-top-50">
                <p>Intense Dental Clinic &copy; <span id="copyright-year"></span> . <a class="text-darker" href="index.html#">Privacy Policy</a>
                    <!-- {%FOOTER_LINK}-->
                </p>
            </div>
        </footer>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }
    
    public function getIndexSliders()
    {
        ob_start();
        ?>
        <div class="section parallax-container" data-parallax-img="images/background-01-1920x955.jpg">
            <div class="parallax-content">
                <div class="bg-overlay-info">
                    <div class="container container-wide">
                        <!--Swiper-->
                        <div class="swiper-container swiper-slider" data-loop="true" data-dragable="false">
                            <div class="swiper-wrapper text-center">
                                <div class="swiper-slide" id="page-loader">
                                    <div class="swiper-caption swiper-parallax">
                                        <div class="swiper-slide-caption">
                                            <div class="row justify-content-sm-center align-items-sm-center">
                                                <div class="col-xl-7 col-xxl-5 section-xl-top-15"><img class="img-fluid d-none d-xl-inline-block" src="images/home-01-563x616.png" width="563" height="616" alt=""></div>
                                                <div class="col-md-10 col-xl-5 col-xxl-4 text-xl-left offset-top-0">
                                                    <blockquote class="quote">
                                                        <h2>“We'll do our best to deliver the best possible healthcare and customer service to you!”</h2>
                                                        <div class="unit unit-lg flex-xl-row unit-spacing-xs offset-top-20">
                                                            <div class="unit-left">
                                                                <hr class="divider bg-white d-none d-xl-inline-block" style="margin-bottom: 3px;">
                                                            </div>
                                                            <div class="unit-body">
                                                                <div>
                                                                    <h5>Dr. Mark Hoffman</h5>
                                                                </div>
                                                                <div class="offset-top-10 d-none d-sm-block">
                                                                    <p style="color: #e8e8e8;">Founder & head of Intense Dental Clinic</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                    <div class="row justify-content-sm-center justify-content-xl-start offset-top-20 offset-sm-top-50">
                                                        <div class="col-sm-10 col-md-6 col-lg-5 col-xl-7"><a class="btn btn-block btn-primary" href="schedule.html">BOOK AN APPOINTMENT</a></div>
                                                        <div class="col-sm-10 col-md-5 col-lg-3 col-xl-5 offset-top-10 offset-md-top-0"><a class="btn btn-block btn-default" href="index.html#">More Info</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-caption swiper-parallax">
                                        <div class="swiper-slide-caption">
                                            <div class="row justify-content-sm-center align-items-sm-center">
                                                <div class="col-xl-8 col-xxl-6"><img class="img-fluid d-none d-xl-inline-block section-xl-top-182 section-xxl-top-110" src="images/home-02-680x488.png" width="680" height="488" alt=""></div>
                                                <div class="col-md-10 col-xl-4 col-xxl-4 text-xl-left offset-top-0">
                                                    <h2>We strive to provide a relaxed atmosphere</h2>
                                                    <p style="color: #e8e8e8;">If you would like to improve, enhance, or protect your smile, please do not hesitate to contact us today.</p>
                                                    <div class="offset-top-20"><span class="icon icon-xxs mdi mdi-cellphone-android text-middle inset-right-10"></span><span class="h6"><a class="text-middle p" href="tel:#">1-800-1234-567</a></span></div>
                                                    <div class="row justify-content-sm-center justify-content-xl-start offset-top-20 offset-sm-top-50">
                                                        <div class="col-sm-10 col-md-6 col-lg-5 col-xl-12 col-xxl-7">
                                                            <div class="inset-xl-left-20 inset-xl-right-20 inset-xxl-left-0 inset-xxl-right-0"><a class="btn btn-block btn-primary" href="schedule.html">BOOK AN APPOINTMENT</a></div>
                                                        </div>
                                                        <div class="col-sm-10 col-md-5 col-lg-3 col-xl-12 col-xxl-5 offset-top-10 offset-xxl-top-0 offset-md-top-0 offset-xl-top-10">
                                                            <div class="inset-xl-left-20 inset-xl-right-20 inset-xxl-left-0 inset-xxl-right-0"><a class="btn btn-block btn-default" href="index.html#">More Info</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-caption swiper-parallax">
                                        <div class="swiper-slide-caption">
                                            <div class="row justify-content-sm-center align-items-sm-center">
                                                <div class="col-xl-6 col-xxl-5 section-xl-top-15"><img class="img-fluid d-none d-xl-inline-block" src="images/home-03-363x606.png" width="363" height="606" alt=""></div>
                                                <div class="col-md-10 col-xl-6 col-xxl-4 text-xl-left offset-top-0">
                                                    <h2>Appointments</h2>
                                                    <div class="offset-top-30">
                                                        <p style="color: #e8e8e8;">To make an appointment with our doctor, please complete the form available on this page. Otherwise, we welcome you to contact our scheduling coordinator directly during our normal office hours.</p>
                                                    </div>
                                                    <div class="row justify-content-sm-center justify-content-xl-start offset-top-30">
                                                        <div class="col-sm-10 col-md-6 col-lg-5 col-xl-7"><a class="btn btn-block btn-primary" href="schedule.html">BOOK AN APPOINTMENT</a></div>
                                                        <div class="col-sm-10 col-md-5 col-lg-3 col-xl-5 offset-top-10 offset-md-top-0"><a class="btn btn-block btn-default" href="index.html#">More Info</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
                            <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $htmlContent = ob_get_contents();
        ob_end_clean();
        return $htmlContent;
    }

}


