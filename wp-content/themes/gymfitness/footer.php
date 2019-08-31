    
        <footer class="site-footer contenedor">
            <hr>

            <div class="contenido-footer">
            <?php
                $navbar_args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($navbar_args);
            ?>

            <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?> <?php ?>  </p>
            
            </div>
        </footer>
    
        <?php wp_footer(); ?>
    </body>
</html>