<section class="nosotros mt-5 container ">
    <?php $titulo = get_post_meta(get_the_ID(), 'titulo_icono_principal', true ); 
 
    ?>
   
    <h2 class="separador text-center mb-5"><?php echo $titulo ?> </h2>
    <div class="row align-items-center">

        <?php 
                $iconos = get_post_meta(get_the_ID(), 'nosotros', true );
                foreach ($iconos as $icono):
        ?>
        <div class="col-md-4 text-center informacion">
            <img src="<?php echo $icono['img_icono']?>" class="img-fluid mb-3" >
            <h3><?php echo $icono['titulo_icono']?></h3>
            <p><?php echo $icono['desc_iconos']?></p>
        </div>
                <?php endforeach;?>
    </div>
</section>