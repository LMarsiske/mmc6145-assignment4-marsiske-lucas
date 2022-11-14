<?php
    // Add stylesheets and javascript files
    /**************************************
    Add stylesheets and javascript files
    **************************************/
    function custom_theme_scripts() {
        //Bootstrap CSS
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');

        //Add Adobe font
        // wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/rlz2sxh.css');

        //Main stylesheet
        wp_enqueue_style('main-styles', get_stylesheet_uri());

        //Javascript files
        wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
    }

    add_action('wp_enqueue_scripts', 'custom_theme_scripts');

    /**************************************
    Add featured images
    **************************************/
    add_theme_support('post-thumbnails');

    /**************************************
    Custom header image
    **************************************/
    $custom_image_header = array(
        'width' => 520,
        'height' => 150,
        'uploads' => true
    );

    add_theme_support('custom-header', $custom_image_header);

    /**************************************
    Add menus to theme
    **************************************/
    function register_my_menus() {
        register_nav_menus(array(
            'main-menu' => __("Main Menu"),
            'socials'   => __("Social Media Links")
        ));
    }

    add_action('init', 'register_my_menus');

    /**************************************
    Misc.
    **************************************/
    //Fix error with ob_end_flush()
    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
    add_action( 'shutdown', function() {
    while ( @ob_end_flush() );
    } );
?>