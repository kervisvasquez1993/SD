<?php 
/*
 * Template Name: Pagina con iconos 
 */
get_header(); ?>

<?php 
    while(have_posts()): the_post();

        get_template_part('template-parts/contenido', 'paginas'); 

        get_template_part('template', 'parts/iconos');
   
   
   endwhile?>



<?php get_footer(); ?> 