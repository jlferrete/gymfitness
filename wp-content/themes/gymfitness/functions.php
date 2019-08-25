<?php

//   Creamos y añadimos el menu del navbar, añadir más utilizando la array
function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymfitness' )
    ));
}
add_action('init', 'gymfitness_menus');

//Scripts y Styles
function gymfitness_scripts_styles() {
    
    //Cargamos normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');


    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    
    //Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

