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
        #acf-afbeelding {
            max-width:
                <?php the_field('afbeelding_breedte'); ?>
                px;
        }

        /* Laptop */
        @media only screen and (min-width: 840px) {
            #

            <?php the_field('blok_id'); ?>
            #acf-afbeelding {
                max-width:
                    <?php the_field('md_afbeelding_breedte'); ?>
                    px;
            }
        }

        /* Desktop */
        @media only screen and (min-width: 1290px) {
            #

            <?php the_field('blok_id'); ?>
            #acf-afbeelding {
                max-width:
                    <?php the_field('xl_afbeelding_breedte'); ?>
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
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center mx-auto">
                <div class="col-span-1 order-2 md:order-1">
                    <p id="acf-titel"
                        class="text-15 leading-22 md:text-19 md:leading-27 xl:text-22 xl:leading-28 font-rubik text-white font-normal text-center mx-auto">
                        <?php the_field('tekst'); ?>
                    </p>
                </div>
                <div class="col-span-1 order-1 md:order-2">
                    <img id="acf-afbeelding" src="<?php the_field('afbeelding'); ?>" alt=""
                        class="img-border w-full mx-auto">
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>