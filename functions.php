<?php

function codemygigfusion_load_scripts() {

    // Favicon and Touch icons

    // Google Fonts
    wp_enqueue_style('merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,700,900', array(), null);
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800', array(), null);

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',
            array(), filemtime(get_template_directory() . '/assets/vendor/bootstrap/css/bootstrap.min.css'), 'all'
        );
    wp_enqueue_style('owl-carousel', get_template_directory_uri(). '/assets/css/plagin-css/owl.carousel.css',
            array(), filemtime(get_template_directory(). '/assets/css/plagin-css/owl.carousel.css'), 'all'
        );
    wp_enqueue_style('rik-icons', get_template_directory_uri(). '/assets/icons/rik-icons/styles.css',
            array(), filemtime(get_template_directory(). '/assets/icons/rik-icons/styles.css'), 'all'
        );
    wp_enqueue_style('box-icons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css',
            array(), null, 'all'
        );
    wp_enqueue_style('style-css', get_template_directory_uri(). '/assets/css/style.css',
            array(), filemtime(get_template_directory(). '/assets/css/style.css'), 'all'
        );
    wp_enqueue_style('responsive-css', get_template_directory_uri(). '/assets/css/responsive.css',
            array(), filemtime(get_template_directory(). '/assets/css/responsive.css'), 'all'
        );
    wp_enqueue_style('custom-css', get_template_directory_uri(). '/assets/css/custom.css',
            array(), filemtime(get_template_directory(). '/assets/css/custom.css'), 'all'
        );


    // JS
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/plagin-js/jquery-1.11.3.js',
            array(), '1.11.3', true
        );
    wp_enqueue_script('preloader-js', get_template_directory_uri() . '/assets/js/plagin-js/preloader.js',
            array(), null, true
        );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
            array(), null, true
        );
    wp_enqueue_script('plagin-js', get_template_directory_uri() . '/assets/js/plagin-js/plagin.js',
            array(), null, true
        );
    wp_enqueue_script('custom-scripts-js', get_template_directory_uri() . '/assets/js/custom-scripts.js',
            array(), null, true
        );
}

add_action( 'wp_enqueue_scripts', 'codemygigfusion_load_scripts' );
