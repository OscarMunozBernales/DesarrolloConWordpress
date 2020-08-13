<?php 

function init_template(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'init_template' );

function assets(){
    // VAMOS AGREGAR ESTILOS
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', '', '4.5.2', 'all' );

    // FUENTES
    wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap', '', '1.0', 'all' );

    // ESTILO PROPIO
    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'assets' );
?>