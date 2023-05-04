<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <?php
    $image = get_field('image');
    if (!empty($image)): ?>
        <img class="w-full h-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

<?php endif; ?>