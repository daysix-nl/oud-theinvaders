<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

<style>
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

        <div
            class="container h-auto grid grid-cols-2 md:grid-cols-3 gap-x-[15px] gap-y-2 md:gap-x-2 md:gap-y-2 xl:gap-x-[25px] xl:gap-y-3 md:max-w-[750px] xl:max-w-[860px] mx-auto">


            <?php

            // Check rows existexists.
            if (have_rows('team_members_repeater')):

                // Loop through rows.
                while (have_rows('team_members_repeater')):
                    the_row(); ?>

                    <a href="<?php the_sub_field('linkedin'); ?>" target="_blank" class="col-span-1 flex flex-col h-auto relative">
                        <div
                            class="absolute top-1 right-1 md:top-2 md:right-2 w-[17px] md:w-[24px] xl:w-[27px] h-auto aspect-square">
                            <?php include get_template_directory() . '/img/icons/linkedin.php'; ?>
                        </div>
                        <img class="object-cover w-full aspect-[4/5]" src="<?php the_sub_field('afbeelding'); ?>" alt="">
                        <div class="pt-1 pl-1 pb-1 md:pb-2 bg-shape-purple h-full">
                            <h3
                                class="text-14 leading-15 md:text-17 md:leading-16 xl:text-19 xl:leading-18 font-space font-bold text-white mb-[6px] md:mb-1 ">
                                <?php the_sub_field('naam'); ?>
                            </h3>
                            <p
                                class="text-13 leading-14 md:text-15 md:leading-13 xl:text-16 xl:leading-16 font-space font-normal text-white">
                                <?php the_sub_field('functie'); ?>
                            </p>
                            <p
                                class="text-white font-space font-normal text-10 leading-10 md:text-11 md:leading-11 xl:text-12 xl:leading-13 mt-0 md:mt-[15px]">
                                <?php the_sub_field('game'); ?>
                            </p>
                        </div>
                    </a>

                    <?php
                    // End loop.
                endwhile;

                // No value.
            else:
                // Do something...
            endif; ?>




        </div>




    </section>

<?php endif; ?>