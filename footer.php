<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="bg-[#020306]">
    <div class="container py-5 xl:py-6 grid">
        <p class="text-24 leading-36 md:text-28 md:leading-25 xl:text-32 xl:leading-29 font-space font-bold text-white text-center"><?php the_field('bedrijfsnaam', 'options');?></p>
        <a href="tel:+31 235 400 200" class="text-16 leading-23 xl:text-20 xl:leading-25 font-rubik font-normal text-white hover:text-bluesoft duration-300 text-center mt-3"><?php the_field('telefoonnummer', 'options');?></a>
        <a href="mailto:<?php the_field('e-mailadres', 'options');?>" class="text-16 leading-23 md:text-18 md:leading-25 xl:text-20 xl:leading-25 font-rubik font-normal text-white hover:text-bluesoft duration-300 text-center"><?php the_field('e-mailadres', 'options');?></a>
        <p class="text-16 leading-23 md:text-18 md:leading-25 xl:text-20 xl:leading-25 font-rubik font-normal text-white text-center mt-[25px] md:mt-[15px] xl:mt-[25px]"><?php the_field('adres', 'options');?></p>
        <a href="<?php the_field('google_button_link', 'options');?>" target="_blank" class="text-13 leading-23 xl:text-14 xl:leading-14 font-rubik font-normal text-[#8C2788] hover:text-bluesoft duration-300 text-center mt-[25px] xl:mt-3"><?php the_field('google_button_tekst', 'options');?></a>
    </div>

</footer>

<?php wp_footer('my_custom_js'); ?>
</body>
</html>
