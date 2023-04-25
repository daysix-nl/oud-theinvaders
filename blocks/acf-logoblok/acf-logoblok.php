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
<section>
    <div class="bg-[#0D0F1C]">
        <div class="container pt-7 md:pt-[70px] xl:pt-[100px] pb-8 md:pb-7 xl:pb-6">
            <h4 class="text-center text-white font-space font-semibold text-24 leading-32 md:text-31 md:leading-40 xl:text-36 xl:leading-50 max-w-[269px] md:max-w-[775px] xl:max-w-[775px] mx-auto"><?php the_field('titel');?></h4>
        </div>
        <div class="container grid grid-cols-2 md:grid-cols-5 gap-3 max-w-[325px] md:max-w-[765px] xl:max-w-[860px] work-list" id="<?php the_field('blok_id');?>">
            <?php
                // Check rows existexists.
                if( have_rows('logo_repeater') ):
                    // Loop through rows.
                    while( have_rows('logo_repeater') ) : the_row(); ?>
                        <div class="col-span-1 flex justify-center items-center">
                            <img src="<?php the_sub_field('logo');?>" alt="Logo" class="max-h-[58px]">
                        </div>
                    <?php
                    // End loop.
                    endwhile;
                // No value.
                else :
                    // Do something...
                endif;
            ?>
        </div>
    </div>
 </section>