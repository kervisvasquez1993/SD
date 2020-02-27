<?php get_header(); ?>

<?php 
    while(have_posts()): the_post();

        get_template_part('template-parts/contenido', 'post');?>

        <div class="comentarios conatiner">

            <?php 
                if(comments_open()):
                    comments_template();
                    
                else: 
                    echo "<p class='text-center comentarios-cerrados alert alert-danger'>
                            Los comentario estan cerrados</p>
                    ";
                endif;
            ?>
        </div>

    <?php endwhile?>
<?php get_footer(); ?>