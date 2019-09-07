<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    
</head>
<body>

<header class="site-header">
    <div class="contenedor">
        <div class="barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url('/') ?>">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="Logo sitio" />
                </a>
            </div>
            
            <?php
                $navbar_args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($navbar_args);
            ?>

        </div>
    </div>
</header>
