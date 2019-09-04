<?php get_header('front'); ?>

<section class="bienvenida text-center seccion">
    <h2 class="texto-primario"><?php the_field('encabezado_bienvenida'); ?></h2>
    <p><?php the_field('texto_bienvenida') ?></p>   

</section>

<div class="seccion-areas">
    <ul class="contenedor-areas">
        <li class="area">
            <?php 
                $area1 = get_field('area_1');
                $imagen = wp_get_attachment_image_src($area1['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area1['area_texto'] ); ?>

            

        </li>
        <li class="area">
            <?php 
                $area2 = get_field('area_2');
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area2['area_texto'] ); ?>
        </li>
        <li class="area">
            <?php 
                $area3 = get_field('area_3');
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'mediano')[0];
             ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area3['area_texto'] ); ?>
        </li>
        <li class="area">
            <?php 
                $area4 = get_field('area_4');
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area4['area_texto'] ); ?>
        </li>
    </ul>
</div>



<?php get_footer(); ?>