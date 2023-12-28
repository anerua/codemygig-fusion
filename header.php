<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>     
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="developer" content="TemplateOcean">
    <?php wp_head(); ?>
    
    <!-- FAV AND TOUCH ICONS   -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Merriweather', serif; -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Open Sans', sans-serif; -->

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Image Slider -->
    <link rel="stylesheet" href="css/plagin-css/owl.carousel.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="icons/rik-icons/styles.css">

    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--   COUSTOM CSS link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
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
                <a class="navbar-brand light-logo btn-scroll" href="#home-section"><img src="images/logo.png" alt="" class="img-responsive"></a>

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