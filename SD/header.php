<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Interwebsite">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/interwebsite.jpg">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003663">
    <meta name="application-name" content="Soluciones Digitales">
    <!--<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/interwebsite.jpg" sizes="200x200">
  -->  <title><?php bloginfo('title');?></title>
   <?php wp_head();?>
    <body>
      <header class="header py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 col-8 mb-4 mb-md-0">
                <a href="index.html">
                    <img src="img/logo.svg" class="img-fluid">
                </a>
            </div>
            <div class="col-12 col-md-8">
            <nav class="navbar navbar-expand-md navbar-light justify-content-center">
                        <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                              $args = array(
                                   'menu_class' => 'nav nav-justified flex-column flex-md-row text-center  justify-content-lg-end',
                                   'container_id' => 'nav_principal',
                                   'container_class' => 'collapse navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
                                   'theme_location' => 'menu_principal'
                              );
                              wp_nav_menu($args);
                         ?>
                    </nav>
            </div>
        </div>
    </div>
</header>