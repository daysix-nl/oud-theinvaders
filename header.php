<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P1HMP2V2JM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-P1HMP2V2JM');
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-block invaders' ); ?>>
<header>
  <section class="fixed z-[40] top-0 left-0 right-0 h-6 xl:h-[70px] header">
      <div class="grid h-6 xl:h-[70px] grid-cols-2">
        <a href="<?php if(ICL_LANGUAGE_CODE=='en'): ?>/<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>/nl<?php endif; ?>" class="block xl:hidden logo my-auto ml-[21px] md:ml-[30px] xl:ml-[37px] z-[40]" id="logo"><?php include get_template_directory() . '/img/local/logo-mobiel.php'; ?></a>
        <a href="<?php if(ICL_LANGUAGE_CODE=='en'): ?>/<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>/nl<?php endif; ?>" class="hidden xl:block logo my-auto ml-[21px] md:ml-[30px] xl:ml-[37px] z-[40]" id="logo"><?php include get_template_directory() . '/img/local/logo.php'; ?></a>
        <div class="flex justify-end items-center">
        <div class="cursor-pointer mr-[21px] md:mr-[30px] xl:mr-[37px] w-[33px]">
          <button id="menuToggle" class="button-hamburger text-white">
            <span></span>
            <span></span>
            <span></span>
          </button>
         </div>
         </div>
      </div>
  </section>
</header>
  


<section class="hamburger-overlay h-screen w-screen md:w-[50vw] pl-[45px] md:pl-6 xl:pl-7 pt-6 xl:pt-7 relative min-h-[700px] md:min-h-[600px] overflow-hidden">
    
                <!-- <?php 
                // add "raw" key and save data to variable
                $langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 1, 'raw' => 1 ) );
                ?>
                <?php if ($langs_array) : ?>
                <div class="drop-block lang grid grid-cols-2 gap-1">
                    <?php foreach ($langs_array as $lang) : ?>
                    <a href="<?php echo $lang['url']; ?>" class="drop-block__lin col-span-1 text-white text-25 font-space uppercase">
                      <?php echo $lang['slug']; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?> -->
<nav class="content-overlay grid gap-3 md:gap-3 mt-5 xl:mt-7">

        <?php
          // Check rows existexists.
          if( have_rows('menu_repeater', 'options') ):
              // Loop through rows.
              while( have_rows('menu_repeater', 'options') ) : the_row(); ?>
                  <a href="<?php the_sub_field('link', 'options')?>" class="text-42 leading-42 md:text-33 md:leading-33 xl:text-36 xl:leading-36 font-space font-bold text-white hover:text-purplesoft duration-300 w-fit"><?php the_sub_field('titel', 'options')?></a>
              <?php
              // End loop.
              endwhile;
          // No value.
          else :
              // Do something...
          endif; ?>
    </nav>
    <div class="absolute bottom-[45px] md:bottom-3 xl:bottom-4 right-[21px] md:right-[30px] xl:right-[37px] left-[45px] md:left-6 xl:left-7">
      <div class="grid content-overlay-two">
        
            <?php
          // Check rows existexists.
          if( have_rows('menu_social_repeater', 'options') ):
              // Loop through rows.
              while( have_rows('menu_social_repeater', 'options') ) : the_row(); ?>
                  <a href="<?php the_sub_field('link', 'options')?>" target="_blank" class="text-24 leading-26 md:text-20 md:leading-26 xl:text-21 xl:leading-26 font-space font-normal text-white w-fit secondmenu flex items-center"><?php the_sub_field('titel', 'options')?></a>
              <?php
              // End loop.
              endwhile;
          // No value.
          else :
              // Do something...
          endif; ?>

          <div class="mt-4 xl:mt-5">
           <?php
          // Check rows existexists.
          if( have_rows('menu_voorwaarden_repeater', 'options') ):
              // Loop through rows.
              while( have_rows('menu_voorwaarden_repeater', 'options') ) : the_row(); ?>
                  <a href="<?php the_sub_field('link', 'options')?>" target="_blank" class="text-16 leading-26 md:text-13 md:leading-26 xl:text-14 xl:leading-26 font-space font-normal text-white w-fit secondmenu flex items-center"><?php the_sub_field('titel', 'options')?></a>
              <?php
              // End loop.
              endwhile;
          // No value.
          else :
              // Do something...
          endif; ?>
        </div>
      
      </div>
      <!-- DESKTOP -->
      <div class="hidden md:flex mt-5 md:mt-4 xl:mt-5 w-full justify-between items-center">
        <p class="text-12 leading-26 md:text-10 md:leading-26  font-space font-normal text-[#676767]">© The Invaders 2023. Made by <a href="https://attentionseekers.nl" target="_blank" class="text-white hover:text-purplesoft duration-300">Attention Seekers.</a></p>
        <a href="https://www.2basics.nl/" target="_blank" class="logo my-auto ml-[21px] md:ml-[30px] xl:ml-[37px]"><?php include get_template_directory() . '/img/local/2basics-logo.svg'; ?></a>
      </div>
      <!-- MOBILE -->
      <div class="flex md:hidden mt-5 md:mt-4 xl:mt-5 w-full justify-between items-center">
        <p class="text-12 leading-26 md:text-10 md:leading-26 font-space font-normal text-[#676767]">© The Invaders 2023.</p>
        
      </div>
    </div>
   
</section>

 <?php include get_template_directory() . '/componenten/contact-overlay.php'; ?>