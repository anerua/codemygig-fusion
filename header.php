<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>     
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="developer" content="TemplateOcean">
    <?php wp_head(); ?>
</head>

<body class="style-1">

    <!-- Start: Navbar  Area
    ============================= -->
    <nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
        <div class="container relative">
            <div class="navbar-header">

                <!-- Menu Button show Mobile view -->
                <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                    <span aria-hidden="true" class="icon"></span>
                </button>

                <!-- TEMPLATE LOGO LIGHT -->
                <a class="navbar-brand light-logo btn-scroll" href="#home-section"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="img-responsive"></a>

            </div>
            
            <!-- Main Menu List -->
            <div class="navbar-collapse" id="js-navbar-menu">
                <ul class="nav navbar-nav navbar-right btn-scroll" id="navbar-nav">
                    <li><a class="btn-nav" href="#services-section">services</a></li>
                    <li><a class="btn-nav" href="#portfolio-section">portfolio</a></li>
                    <li><a class="btn-nav" href="#testimonial-section">testimonials</a></li>
                    <li><a class="btn-nav" href="#team-section">team</a></li>
                    <li><a class="btn-nav" href="#contact-us-section">Contact Us</a></li>
                </ul>
            </div>


            <!-- Right Side Navigation Button -->
            <div class="navbar-collapse-right hidden-xs " >
                <ul class="nav navbar-nav navbar-right btn-scroll">
                    <li><a class="btn-nav" href="#contact-us-section">Get in Touch <i class="icon icon-arrow-right"></i></a></li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- End: Navbar Area
    ============================= -->