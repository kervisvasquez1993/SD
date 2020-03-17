<?php



require_once dirname( __FILE__ ).'/cmb2.php';
require_once dirname( __FILE__ ).'/inc/custom-fields.php';
require_once dirname( __FILE__ ).'/inc/posttype.php';
require_once dirname( __FILE__ ).'/inc/queries.php';
require_once dirname( __FILE__ ).'/inc/widgets.php';
require_once dirname( __FILE__ ).'/inc/opciones.php';

/**
 * imagenes descatacas para calquiera
 * 
 */

 //pasando imagen de php a css 
 add_action( 'init', 'sd_imagen_destacada' );
function sd_imagen_destacada($id){
    $imagen = get_the_post_thumbnail_url( $id, 'full');
    $html = '';
    $class = false;
   
    if($imagen){
        $class = true;
       $html.='<div class="container">';
       $html.=  '<div class="row imagen-destacada"></div>';
       $html.='</div>';
      
       // agregamos los stylos lineal
        wp_register_style('custom', false);
        wp_enqueue_style( 'custom' );


        $imagen_destacada_css = "
           .imagen-destacada
            {
              background:url({$imagen});
            }";
            wp_add_inline_style( 'custom', $imagen_destacada_css );
    }
    return array($html,$class);
}


 //fin del codigo //
function sd_setup(){
    //definimos los tamaños de las imagenes

    add_image_size( 'mediano', 510, 340, true );
    

    add_theme_support( 'post-thumbnails');

    register_nav_menus( array(
    'menu_principal' => esc_html__('MenuPrincipal','sd-digital')
    )
    );

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
wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array('bootstrap-js'),'1.0.0', true);

}

add_action('wp_enqueue_scripts','style');

}

/** 
 * agragamos campos para mostar el mensaje personalizado */

 add_filter( 'display_post_states', 'cambiar_estado1',10,2 );
function cambiar_estado1($estado, $post){
    if(('page' === get_post_type($post->ID)) && ('page-portafolio2.php' == get_page_template_slug($post->ID)))
    $state[] = __('Pagina para el portafolio2 <a href="post-new.php?post_type=portafolio2"> Agregar nuevo pagina para el portafolio2</a>');
    return $state;
}

add_action( 'widgets_init', 'widgets_sidebar' );
function widgets_sidebar(){
    register_sidebar(array(
        'name' => 'widgets Lateral',
        'id' => 'sidebar_widget',
        'before_widget' => '<div class"widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="text-center text-ligth separador inverso">',
        'after_title' => '</h2>'

    ));
}

