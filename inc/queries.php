<?php
function kervis_query_portafolio2($cantidad = -1){
    $args = array(
        'post_type' => 'portafolio2',
        'posts_per_page' => $cantidad

    );

    $portafolio2 = new WP_Query($args);
    while( $portafolio2->have_posts()): $portafolio2->the_post(); ?>
             <div class="col-md-6 col-lg-4">
                        <div class="card">
                           <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                              <?php 
                                $fecha = 'sin definir';
                                $costo = 'sin definir';
                              ?>  
                             
                               <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p>
                                <span class="badge badge-secondary px-2 py-2">$300</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title"><?php the_title();?></h3>
                                    <p class="card-subtitle mb-2">sub-titulo</p>
                                    <p class="card-text"><?php the_excerpt();?></p>
                                    <a class="btn btn-primary d-block d-md-inline" href="<?php the_permalink()?>">Más Información.</a>
                            </div>
                        </div>
              </div>
    
    
    <?php 
        
endwhile; wp_reset_postdata();



}