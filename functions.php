<?php

function codemygigfusion_theme_setup() {
    add_theme_support('post-thumbnails');
}

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

// Portfolio Custom Post Type
function register_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio Item'),
                'add_new' => __('Add New Portfolio Item'),
                'add_new_item' => __('Add New Portfolio Item'),
                'edit_item' => __('Edit Portfolio Item'),
                'new_item' => __('New Portfolio Item'),
                'view_item' => __('View Portfolio Item'),
                'search_items' => __('Search Portfolio Items'),
                'not_found' => __('No portfolio items found'),
                'not_found_in_trash' => __('No portfolio items found in trash')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'menu_icon' => 'dashicons-portfolio',
            'menu_position' => 5
        )
    );
}

// Register Testimonials Custom Post Type
function register_testimonials_post_type() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial'),
                'add_new' => __('Add New Testimonial'),
                'add_new_item' => __('Add New Testimonial'),
                'edit_item' => __('Edit Testimonial'),
                'new_item' => __('New Testimonial'),
                'view_item' => __('View Testimonial'),
                'search_items' => __('Search Testimonials'),
                'not_found' => __('No testimonials found'),
                'not_found_in_trash' => __('No testimonials found in trash')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}

// ACF fields - Portfolio 
function add_portfolio_custom_fields() {
    if(function_exists("register_field_group")) {
        register_field_group(array(
            'id' => 'portfolio_fields',
            'title' => 'Portfolio Details',
            'fields' => array(
                array(
                    'key' => 'field_category',
                    'label' => 'Category',
                    'name' => 'category',
                    'type' => 'text',
                    'instructions' => 'Enter the project category (e.g., CLEANING SERVICE)',
                    'required' => true,
                ),
                array(
                    'key' => 'field_completion_date',
                    'label' => 'Completion Date',
                    'name' => 'completion_date',
                    'type' => 'date_picker',
                    'instructions' => 'Select the project completion date',
                    'required' => true,
                    'display_format' => 'F Y',
                    'return_format' => 'F Y',
                    'first_day' => 1,
                ),
                array(
                    'key' => 'field_project_url',
                    'label' => 'Project URL',
                    'name' => 'project_url',
                    'type' => 'url',
                    'instructions' => 'Enter the live project URL',
                ),
                array(
                    'key' => 'field_slider_images',
                    'label' => 'Slider Images',
                    'name' => 'slider_images',
                    'type' => 'gallery',
                    'instructions' => 'Add images for the project slider',
                    'required' => true,
                    'min' => 1,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                )
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'portfolio'
                    )
                )
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
}

// ACF fields - Testimonials
function add_testimonials_custom_fields() {
    if(function_exists("register_field_group")) {
        register_field_group(array(
            'id' => 'testimonials_fields',
            'title' => 'Testimonial Details',
            'fields' => array(
                array(
                    'key' => 'field_position',
                    'label' => 'Position',
                    'name' => 'position',
                    'type' => 'text',
                    'instructions' => 'Enter the position of the person (e.g., CEO)',
                    'required' => true,
                ),
                array(
                    'key' => 'field_company',
                    'label' => 'Company',
                    'name' => 'company',
                    'type' => 'text',
                    'instructions' => 'Enter the name of the company',
                    'required' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'testimonial'
                    )
                )
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
}

add_action('after_setup_theme', 'codemygigfusion_theme_setup');
add_action('init', 'register_portfolio_post_type');
add_action('init', 'register_testimonials_post_type');
add_action('acf/init', 'add_portfolio_custom_fields');
add_action('acf/init', 'add_testimonials_custom_fields');
add_action( 'wp_enqueue_scripts', 'codemygigfusion_load_scripts' );
