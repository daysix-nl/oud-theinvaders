<?php
/**
 * Template name: WORK
 */


 get_header(); ?>
 
<!-- BLOCK: MAIN -->
<main class="relative">
   
    <!-- BACKGROUND SETUP -->
    <img src="/wp-content/themes/day-six/img/local/background-page.jpg" alt="" class="absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-2] duration-[unset]">
    <div class="bg-gradient-to-b from-[#061116] via-[#01020385] to-[#061116] absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-1] duration-[unset]"></div>


    <!-- CONTENT AREA -->
    <div class="bg-gradient-to-b from-[#742B8B99] to-[#0009] page-top duration-[unset]">

        <!-- INTRO VERSION 1 -->
        <div class="container">
            <h1 class="text-40 leading-51 md:text-30 md:leading-39 xl:text-35 xl:leading-44 font-space text-white uppercase font-bold text-center mt-4 md:mt-7 xl:mt-8">Work</h1>
            <h2 class="text-20 leading-22 md:text-40 md:leading-42 xl:text-44 xl:leading-48 font-rubik text-white font-semibold max-w-full md:max-w-[649px] xl:max-w-[649px] mx-auto text-center mt-5 xl:mt-5">Our work & wins</h2>
            <p class="text-15 leading-22 md:text-19 md:leading-27 xl:text-22 xl:leading-30 font-rubik text-white font-normal text-center mt-4 xl:mt-5 max-w-[273px] md:max-w-[767px] xl:max-w-[854px] mx-auto">Check out our work, in-game wins and even a couple of awards</p>
        </div>

        <!-- WORK LOOP -->
        <div class="container grid grid-cols-cols-1 md:grid-cols-3 mt-5 pb-7 md:mt-6 md:pb-7 xl:pb-10 gap-3 md:gap-2 px-1 xl:max-w-[880px] mx-auto work-block list-b-none">

                        <a href="<?php the_permalink() ?>" class="col-span-1 flex flex-col h-auto card-work max-w-[330.2px] md:max-w-[unset] mx-auto">
                            <img class="object-cover w-full aspect-[3/2]" src="/wp-content/themes/day-six/img/local/case-1.png" alt="">
                            <div class="pt-1 pb-2 md:pb-[15px] px-2 md:px-[15px] bg-shape-purple">
                                <h3 class="text-22 leading-20 md:text-17 md:leading-18 xl:text-19 xl:leading-18 font-space font-bold text-white md:mb-1 mb-1 "><?php echo $teasertitle ; ?></h3>
                                <p class="text-19 leading-20 md:text-17 md:leading-18 xl:text-18 xl:leading-19 font-space font-normal text-white"><?php the_field('teaser_subtitle', $post_id);?></p>
                            </div>
                        </a>

            <?php

                $loop = new WP_Query( array(
                    'post_type' => 'work',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'    
                    )
                );
               
                ?>

            <?php if ($loop->have_posts()): ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <?php $teasertitle = get_field( 'teaser_title', get_the_ID() ); ?>         
                        <a href="<?php the_permalink() ?>" class="col-span-1 flex flex-col h-auto card-work max-w-[330.2px] md:max-w-[unset] mx-auto">
                            <img class="object-cover w-full aspect-[3/2]" src="/wp-content/themes/day-six/img/local/case-1.png" alt="">
                            <div class="pt-1 pb-2 md:pb-[15px] px-2 md:px-[15px] bg-shape-purple">
                                <h3 class="text-22 leading-20 md:text-17 md:leading-18 xl:text-19 xl:leading-18 font-space font-bold text-white md:mb-1 mb-1 "><?php echo $teasertitle ; ?></h3>
                                <p class="text-19 leading-20 md:text-17 md:leading-18 xl:text-18 xl:leading-19 font-space font-normal text-white"><?php the_field('teaser_subtitle', $post_id);?></p>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_query(); ?>    
                    <?php if($loop->post_count > 9): ?>
                        <button class="button-show-more col-span-1 mx-auto md:col-span-3 flex uppercase text-white text-25 leading-35 md:text-19 md:leading-35 xl:text-22 xl:leading-35 font-space font-bold border-[3px] justify-center items-center border-white w-[178px] md:w-[135px] h-6 md:h-[45px] xl:w-[150px] xl:h-5 mt-5 md:mt-[45px]">MORE</button>
                    <?php endif; ?>
            <?php endif; ?>  
        </div>
    </div>
    <div class="bg-[#0D0F1C]">
         <!-- Current co-op games in progress: -->
        <div class="container pt-7 md:pt-[70px] xl:pt-[100px] pb-8 md:pb-7 xl:pb-6">
            <h4 class="text-center text-white font-space font-semibold text-24 leading-32 md:text-31 md:leading-40 xl:text-36 xl:leading-50 max-w-[269px] md:max-w-[775px] xl:max-w-[775px] mx-auto">Current co-op games in progress:</h4>
        </div>
        <div class="container grid grid-cols-2 md:grid-cols-5 gap-3 max-w-[325px] md:max-w-[765px] xl:max-w-[860px] pb-[70px] md:pb-[110px] xl:pb-[110px] work-list">
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/bol.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/samsung.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/young-capital.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/sangquin.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/circle.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/just.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/t-mobile.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/kwf.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/bca.php'; ?>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <?php include get_template_directory() . '/img/local/icon-logo/lees.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>