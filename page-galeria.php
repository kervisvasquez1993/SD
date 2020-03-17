<?php 
/*
    Template Name: galeria 
*/
get_header();?>
<?php while(have_posts()): the_post(); 
                get_template_part( 'template-parts/contenido', 'paginas' ); 
                $imagenes = get_post_meta(get_the_Id(), 'galeria', true);?>
         <div class="container">
        <div class="row col-12">
        <div class="card-columns">
            <?php foreach ($imagenes as $id => $imagen) : ?>
            <div class="card">
              <a href="#" data-toggle="modal" data-target="#imagen<?php echo $id;?>">
                    <?php  $imagen = wp_get_attachment_image_url($id, 'full');?>
                    <img   src="<?php echo $imagen; ?>" class="img-fluid" />
              </a>
          <div id="#imagen<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                  <img src="<?php echo $imagen; ?>" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
            <?php endforeach; ?>
      </div>

<?php endwhile; ?>
 </div>
 </div>
<?php get_footer();?>
