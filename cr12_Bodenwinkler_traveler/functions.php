<?php 
    /**
     * Importing Styles and Stuff
     */
    function codefactory_files() {

        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
        wp_enqueue_style('my style sheet', get_template_directory_uri().'/style.css');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array(), '1.0', true);


    }
    add_action('wp_enqueue_scripts', 'codefactory_files');




    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus( array(
            'primary' => __( 'Top Menu', 'THEMENAME' ),
        ) );
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    function set_excerpt_length(){
        return 30;
    }

    add_filter('excerpt_length','set_excerpt_length');


    /**
     * Enable User to post thumbnails
     */
    add_theme_support('post-thumbnails');

    /**
     * Register a Widget
     */
    function register_widgets() {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar">',
            'after_widget' => '</div>'
        ));

        register_sidebar(array(
            'name' => 'footerwidget',
            'id' => 'footerwidget',
            'before_widget' => '<div class="footer">',
            'after_widget' => '</div>'
        ));
    }
    add_action('widgets_init', 'register_widgets');
?>