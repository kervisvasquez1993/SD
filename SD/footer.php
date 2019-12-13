
    <div class="footer p-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                <?php
                              $args = array(
                                   'menu_class' => 'nav nav-justified flex-column flex-md-row text-center  justify-content-lg-end',
                                   'container_id' => 'nav_principal',
                                   'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
                                   'theme_location' => 'menu_principal'
                              );
                              wp_nav_menu($args);
                         ?>
                </div>
                <div class="col-md-6">
                    <p class="copyright text-center text-md-right">Todos los derechos reservados</p>
                </div>
            </div>
        </div>
</div>

<?php wp_footer();?>