<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img class="w-full h-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>