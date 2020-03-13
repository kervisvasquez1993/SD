<?php 
/*
    Template Name: galeria 
*/
get_header();?>
<?php while(have_posts()): the_post(); 
                get_template_part( 'template-parts/contenido', 'paginas' );

endwhile;
?>
<div class="row justify-content-center">
            <div class="col-md-10 bg-white  py-3 px-5">
                <h2 class="separador text-center mb-5">Galería</h2>
                
                <div class="card-columns">
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen1">
                            <img src="img/clase1.jpg" class="img-fluid">
                        </a>
                        <div id="imagen1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/1.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen2">
                            <img src="img/clase2.jpg" class="img-fluid">
                        </a>
                        <div id="imagen2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/2.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen3">
                            <img src="img/clase3.jpg" class="img-fluid">
                        </a>
                        <div id="imagen3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/3.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen4">
                            <img src="img/clase4.jpg" class="img-fluid">
                        </a>
                        <div id="imagen4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/6.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen5">
                            <img src="img/clase5.jpg" class="img-fluid">
                        </a>
                        <div id="imagen5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/5.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#imagen6">
                            <img src="img/clase6.jpg" class="img-fluid">
                        </a>
                        <div id="imagen6" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <img src="img/4.jpg" class="img-fluid">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer();?>
