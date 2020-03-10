<?php $html = sd_imagen_destacada( get_the_ID());
          
          echo $html[0];

        ?>
  
  
    <main class="container">
        <div class="row justify-content-center entrada ">
            <div class="col-md-8 bg-white contenido-nosotros contenido-entrada py-3 px-5 
            <?php echo $html[1] ? 'col-md-8' : 'col-md-12'
            
            ?>">
            <h2 class="separador text-center my-5"> <?php the_title(); ?></h2>
            <?php  get_template_part('template-parts/meta', 'post');?>
                
                <?php the_content(); ?>
            </div>
        </div>

        
    </main>