<?php get_header();?>
<?php while(have_posts()): the_post();

?>


 
<div class="container-fluid imagenes-principales">
    <div class="row imagen-superior imagen">
        <div class="col-md-6 bg-primary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center text-light py-3">
                         <?php echo get_post_meta(get_the_ID(), 'texto_superior_1', true ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style=" background: url(<?php echo get_post_meta(get_the_ID(), 'image1_home', true );?> );"></div>
    </div>
    <div class="row imagen-inferior imagen">
        <div class="col-md-6" style=" background: url(<?php echo get_post_meta(get_the_ID(), 'image2_home', true );?> );"></div>
        <div class="col-md-6 bg-secondary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center py-3">
                    <?php echo get_post_meta(get_the_ID(), 'texto_superior_2', true ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--.container-fluid-->


<div class="container">
    <?php 
        $nosotros = new WP_Query('pagename=nosotros');
        while($nosotros->have_posts()): $nosotros->the_post();
         get_template_part('template', 'parts/iconos');
   

endwhile; wp_reset_postdata();
    ?>
</div> <!--.container-->

    <section class="clases mt-5 py-5">
            <h2 class="separador text-center mb-3">Próximas Clases</h2>

            <div class="container">
                <div class="row">
                     <?php kervis_query_portafolio2(3) ?>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-5 col-md-3">
                        <a href="<?php  echo get_permalink( get_page_by_title('portafolio2') );?>" class="btn btn-primary">Ver Todas las Clases</a>
                    </div>
                </div>
            </div>
    </section>

   
  



    <div class="licenciatura" style="background: url(<?php echo get_post_meta(get_the_ID(), 'imagen_nosotros_home', true );?>">
         <div class="container">
             <div class="row align-items-center justify-content-center">
                 <div class="col-md-8 ">
                         <div class="contenido text-light text-center ">
                         <?php echo get_post_meta(get_the_ID(), 'texto_nosotros', true ); ?>
                            <?php $contacto = get_page_by_title('Contacto');
                              

                                
                            ?>
                              <a href="<?php echo get_the_permalink($contacto->ID);?>" class="btn-primary btn text-uppercase">Más información</a>
                         </div>
                 </div>
             </div>
         </div>
    </div>

<?php endwhile;?>
<?php get_footer();?>