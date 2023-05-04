<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <style>
        /* Mobile */
        #

        <?php the_field('blok_id'); ?>
        #acf-titel {
            max-width:
                <?php the_field('tekstblok_breedte'); ?>
                px;
        }

        /* Laptop */
        @media only screen and (min-width: 840px) {
            #

            <?php the_field('blok_id'); ?>
            #acf-titel {
                max-width:
                    <?php the_field('md_tekstblok_breedte'); ?>
                    px;
            }
        }

        /* Desktop */
        @media only screen and (min-width: 1290px) {
            #

            <?php the_field('blok_id'); ?>
            #acf-titel {
                max-width:
                    <?php the_field('xl_tekstblok_breedte'); ?>
                    px;
            }
        }

        /* Mobile */
        #

        <?php the_field('blok_id'); ?>
            {
            padding-top:
                <?php the_field('pt_mobiel'); ?>
                px;
            padding-bottom:
                <?php the_field('pb_mobiel'); ?>
                px;
        }

        /* Laptop */
        @media only screen and (min-width: 840px) {
            #

            <?php the_field('blok_id'); ?>
                {
                padding-top:
                    <?php the_field('pt_laptop'); ?>
                    px;
                padding-bottom:
                    <?php the_field('pb_laptop'); ?>
                    px;
            }
        }

        /* Desktop */
        @media only screen and (min-width: 1290px) {
            #

            <?php the_field('blok_id'); ?>
                {
                padding-top:
                    <?php the_field('pt_desktop'); ?>
                    px;
                padding-bottom:
                    <?php the_field('pb_desktop'); ?>
                    px;
            }
        }
    </style>
    <section id="<?php the_field('blok_id'); ?>">
        <h2 id="acf-titel"
            class="tekstblok-ondertitel text-20 leading-22 md:text-40 md:leading-42 xl:text-44 xl:leading-48 font-rubik text-white font-semibold mx-auto text-center mt-5 xl:mt-5">
            <?php the_field('titel'); ?>
        </h2>
    </section>

<?php endif; ?>