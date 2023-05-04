<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <!-- MOBIEL -->
    <h2 class="block md:hidden xl:hidden tekstblok-ondertitel text-20 leading-22 font-rubik text-white font-semibold mx-auto text-center mt-5 xl:mt-5"
        style="max-width: <?php the_field('tekstblok_breedte'); ?>px;"><?php the_field('titel'); ?></h2>
    <!-- LAPTOP -->
    <h2 class="hidden md:block xl:hidden tekstblok-ondertitel md:text-40 md:leading-42 font-rubik text-white font-semibold mx-auto text-center mt-5 xl:mt-5"
        style="max-width: <?php the_field('md_tekstblok_breedte'); ?>px;"><?php the_field('titel'); ?></h2>
    <!-- DESKTOP -->
    <h2 class="hidden md:hidden xl:block tekstblok-ondertitel xl:text-44 xl:leading-48 font-rubik text-white font-semibold mx-auto text-center mt-5 xl:mt-5"
        style="max-width: <?php the_field('xl_tekstblok_breedte'); ?>px;"><?php the_field('titel'); ?></h2>

<?php endif; ?>