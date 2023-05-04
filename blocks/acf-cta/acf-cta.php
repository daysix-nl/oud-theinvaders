<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>


    <style>
    /* Mobile */
    #<?php the_field('blok_id');?> #acf-titel {
        max-width: <?php the_field('tekstblok_breedte');?>px;
    }

    /* Laptop */
    @media only screen and (min-width: 840px) {
     #<?php the_field('blok_id');?> #acf-titel {
        max-width: <?php the_field('md_tekstblok_breedte');?>px;
    }
    }

    /* Desktop */
    @media only screen and (min-width: 1290px) {
    #<?php the_field('blok_id');?> #acf-titel {
         max-width: <?php the_field('xl_tekstblok_breedte');?>px;
    }
    }
    /* Mobile */
    #<?php the_field('blok_id');?> {
        padding-top: <?php the_field('pt_mobiel');?>px;
        padding-bottom: <?php the_field('pb_mobiel');?>px;
    }

    /* Laptop */
    @media only screen and (min-width: 840px) {
     #<?php the_field('blok_id');?> {
        padding-top: <?php the_field('pt_laptop');?>px;
        padding-bottom: <?php the_field('pb_laptop');?>px;
    }
    }

    /* Desktop */
    @media only screen and (min-width: 1290px) {
    #<?php the_field('blok_id');?> {
        padding-top: <?php the_field('pt_desktop');?>px;
        padding-bottom: <?php the_field('pb_desktop');?>px;
    }
    }
</style>
    <section id="<?php the_field('blok_id'); ?>">
        <div class="container linkinnit">
            <div id="acf-titel"
                class="text-center mx-auto text-24 leading-32 md:text-31 md:leading-40 xl:text-36 xl:leading-50 font-space font-semibold text-white">
                <?php the_field('titel'); ?>
            </div>
        </div>

    </section>

<?php endif; ?>