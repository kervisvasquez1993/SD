<?php 

if(!function_exists( style )) {

function style(){
    wp_enqueue_style('raleweay','https://fonts.googleapis.com/css?family=Raleway&display=swap',array(), '1.0.0'.'all');
    wp_enqueue_style('Oxygen','https://fonts.googleapis.com/css?family=Oxygen&display=swap',array(),'1.0.0','all');
    wp_enqueue_style('abel','https://fonts.googleapis.com/css?family=Abel&display=swap', array(),'1.0.0','all');
    wp_enqueue_style('News Cycle','https://fonts.googleapis.com/css?family=News+Cycle&display=swap',array(),'1.0.0','all');
    wp_enqueue_style('bootstraps','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(),'4.2.3','all');
    wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(),'4.7.0'.'all');
   // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
    wp_enqueue_style('style',get_stylesheet_uri());
    //wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'),'4.2.3',true);
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('popper'),'4.2.3', true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);

}

add_action('wp_enqueue_scripts','style');
}
