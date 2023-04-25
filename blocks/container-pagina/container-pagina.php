<!-- BLOCK: MAIN -->
<main class="relative">
   

    <!-- BACKGROUND SETUP -->
    <img src="<?php the_field('afbeelding');?>" alt="background-<?php the_title();?>" class="absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-2] duration-[unset]">
    <div class="bg-gradient-to-b from-[#061116] via-[#01020385] to-[#061116] absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-1] duration-[unset]"></div>


    <!-- CONTENT AREA -->
    <div class="bg-gradient-to-b from-[<?php the_field('pagina_kleur');?>] to-[#0009] page-top duration-[unset]">
        <div class="container">
            <h1 class="text-40 leading-51 md:text-30 md:leading-39 xl:text-35 xl:leading-44 font-space text-white uppercase font-bold text-center mt-4 md:mt-7 xl:mt-8"><?php the_title();?></h1>

            <?php $allowed_blocks_inner = ['acf/acf-ondertitel','acf/acf-afbeelding','acf/acf-afbeelding-heading','acf/acf-afbeelding-tekstblok','acf/acf-body','acf/acf-button','acf/acf-cta','acf/acf-heading-afbeelding','acf/acf-heading-body','acf/acf-lege-ruimte','acf/acf-logoblok','acf/acf-projecten','acf/acf-subheading','acf/acf-team-members','acf/acf-tekstblok-afbeelding',];?>
            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_inner ) ); ?>"/>
        
        </div>
    </div>
</main>