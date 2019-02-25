<?php
    function temawordpress_setup() {
        // Preparant el tema per a i18n
        load_theme_textdomain( "temawordpress", bloginfo('template_url')."/languages");
     
        // Suport a thumbnails
        add_theme_support( 'post-thumbnails' );
     
        // Afig enllaços als comentaris i a l'RSS
        add_theme_support( 'automatic-feed-links' );
     
        // Deixa que Wordpress gestione el títol
        add_theme_support( 'title-tag' );
     
        // Activa el suport per a un logotipus personalitzat
        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ) );
     
        // Registrant la ubicació dels menús
        register_nav_menus(array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
     
        // Inclou per defecte el marcat HTML5 per a formularis de cerca i comentaris
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }
    function temawordpress_cssjs() {
        wp_enqueue_style( 'temawordpress-style', get_template_directory_uri() . '/css/styles.min.css' );
        wp_enqueue_script( 'temawordpress-js', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), '', true );
    }
add_action( 'after_setup_theme', 'temawordpress_setup' );
/*add_action( 'wp_enqueue_scripts', 'my-theme_cssjs' );*/

function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );


?>
