<?php get_header();?>

<div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="subtitulo text-center pl-3">
                    <?php 
                        $id_blog = get_option( 'page_for_posts');
                        echo get_post_meta( $id_blog, 'slogan_blog',true );
                    ?>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <main class="col-lg-9 col-md-8">
                <h1 class="separador text-center mb-3">Nuestro Blog</h1>
                <?php while(have_posts()): the_post(); ?>
                <div class="row entrada mb-4">
                    <div class="col-md-4">
                        <?php 
                            the_post_thumbnail( 'mediano', array('class' => 'img-fluid') );
                         ?>
                    </div>
                    <div class="col-md-8">
                        <div class="contenido-entrada pt-4 pt-md-0">
                            <a href="#"><h3><?php the_title(); ?></h3></a>
                            <!--informacion meta de la entrada-->
                            <?php  get_template_part('template-parts/meta', 'post');?>
                            <p>
                                <?php the_excerpt()?>                            </p>
                            <a href="<?php the_permalink();?>" class="btn btn-primary text-light">Ver Entrada</a>
                        </div>
                    </div>
                </div><!--.row .entrada-->
<?php endwhile;?>

<ul class="pagination pagination-lg justify-content-center mt-5">
    <li class="page-item">
        <?php 
            previous_posts_link(
                '<span class="page-link" aria-hidden="true">Anteriores &laquo;</span>
                <span class="sr-only">Anteriores</span>
            ');      
        ?>

    </li>
    <li class="page-item">
        <?php 
            next_posts_link(
                '<span class="page-link" aria-hidden="true">Siguientes &raquo;</span>
                <span class="sr-only">Anteriores</span>
            ');      
        ?>

    </li>
</ul>
            </main>

          <?php get_sidebar();?>
        </div>
    </div>



   
   

<?php get_footer();?>