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
        <div
            class="container grid grid-cols-cols-1 md:grid-cols-3 gap-3 md:gap-2 px-1 xl:max-w-[880px] mx-auto work-block list-b-none h-auto">

            <?php

            $loop = new WP_Query(
                array(
                    'post_type' => 'ptcase',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
            );

            ?>

            <?php if ($loop->have_posts()): ?>
                <?php while ($loop->have_posts()):
                    $loop->the_post();
                    $id = get_the_ID(); ?>

                    <a href="<?php the_permalink($id) ?>"
                        class="col-span-1 flex flex-col h-auto card-work max-w-[330.2px] md:max-w-[unset] mx-auto">
                        <img class="object-cover w-full aspect-[3/2]" src="<?php the_field('teaser_image', $id); ?>" alt="">
                        <div class="pt-1 pb-2 md:pb-[15px] px-2 md:px-[15px] bg-shape-purple h-full">
                            <h3
                                class="text-22 leading-20 md:text-17 md:leading-18 xl:text-19 xl:leading-18 font-space font-bold text-white md:mb-1 mb-1 ">
                                <?php the_field('teaser_title', $id); ?>
                            </h3>
                            <p
                                class="text-19 leading-20 md:text-17 md:leading-18 xl:text-18 xl:leading-19 font-space font-normal text-white">
                                <?php the_field('teaser_subtitle', $id); ?>
                            </p>
                        </div>
                    </a>
                <?php endwhile;
                wp_reset_query(); ?>
                <?php if ($loop->post_count > 9): ?>
                    <button
                        class="button-show-more col-span-1 mx-auto md:col-span-3 flex uppercase text-white text-25 leading-35 md:text-19 md:leading-35 xl:text-22 xl:leading-35 font-space font-bold border-[3px] justify-center items-center border-white w-[178px] md:w-[135px] h-6 md:h-[45px] xl:w-[150px] xl:h-5 mt-5 md:mt-[45px] hover:bg-[#ffffff26] duration-300">MORE</button>
                <?php endif; ?>
            <?php endif; ?>
        </div>


    </section>

<?php endif; ?>