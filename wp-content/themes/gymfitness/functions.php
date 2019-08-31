<?php

/** Consultas reutilizables **/

require get_template_directory() . '/inc/queries.php';

//Cuando el tema es activado

function gymfitness_setup() {

    // Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //Agregar imagenes de tamaño personalizado
    add_image_size( 'square', 350, 350, true );
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'cajas', 400, 375, true );
    add_image_size( 'mediano', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );

}
add_action('after_setup_theme', 'gymfitness_setup');

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
    
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');

    if( is_page('galeria') ) :
        wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.1');
    endif;
    //Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
    
    if( is_page('galeria') ) :
        wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.1', true);
    endif;
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


//Definir Zona de Widgets

function gymfitness_widgets() {
    register_sidebar( array(
        'name'              => 'Sidebar1',
        'id'                => 'sidebar_1',
        'before_widget'     => '<div class="widget">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="text-center texto-primario">',
        'after_title'       => '</h3>'
    ));
    register_sidebar( array(
        'name'              => 'Sidebar2',
        'id'                => 'sidebar_2',
        'before_widget'     => '<div class="widget">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="text-center texto-primario">',
        'after_title'       => '</h3>'
    ));
}
add_action( 'widgets_init', 'gymfitness_widgets' );

