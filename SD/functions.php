<?php 

/*
        funciones que se cargan al activar el theme
*/ 

 function sd_setup(){

    //menu de navegacion
    register_nav_menus( array(
        'menu_principal' => esc_html__('MenuPrincipal','sd-digital')));

 }
 add_action('after_setup_theme', 'sd_setup' );

 /* agregamos class nav-link*/
 function enlaces_class($atts,$item,$args){
        if($arg->theme_location == 'menu_principal'){
            $atts['class'] = 'nav-link';
        }
        return($atts);
 }
 add_filter('nav_menu_link_attributes', 'enlaces_class', 10, 3);

if(!function_exists( style )) {

function style(){
    
    wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(),'4.7.0'.'all');
    wp_enqueue_style('bootstraps',get_template_directory_uri().'/css/bootstrap.css', array(),'4.2.3','all');
   // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
    wp_enqueue_style('style',get_stylesheet_uri());
    //wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'),'4.2.3',true);
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js', array('popper'),'4.2.3', true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);
    
}

add_action('wp_enqueue_scripts','style');

}
