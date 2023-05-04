<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <!-- <video width="100%" class="w-full h-auto aspect-video" controls>
    <source src="<?php the_field("video") ?>" type="video/mp4">
</video> -->

    <div class="w-full">
        <?php the_field("video") ?>
    </div>
<?php endif; ?>