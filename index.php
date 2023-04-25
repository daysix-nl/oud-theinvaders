<?php 
/**
 * The main template file
 * 
 * @package Day Six theme
 */


get_header(); ?>

<!-- BLOCK: MAIN -->
<main class="relative">
   

    <!-- BACKGROUND SETUP -->
    <img src="/wp-content/themes/day-six/img/local/background-page.jpg" alt="" class="absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-2] duration-[unset]">
    <div class="bg-gradient-to-b from-[#061116] via-[#01020385] to-[#061116] absolute top-0 left-0 right-0 bottom-0 object-cover h-screen w-screen z-[-1] duration-[unset]"></div>

    <!-- CONTENT AREA -->
    <div class="bg-gradient-to-b from-[#48237F99] to-[#0009] page-top duration-[unset]">
  
       <!-- KUBUS -->
        <div class="container mt-[180px] md:mt-[150px] xl:mt-[135px]">
            <img src="/wp-content/themes/day-six/img/local/kubus.png" alt="" class="w-[140.8px] md:w-[162.31px] xl:w-[182.4px] h-auto mx-auto">
        </div>

        <!-- TITLE - TEXT -->
        <div class="container mt-6 md:mt-9 xl:mt-10 pb-[300px] md:pb-[230px] xl:pb-[200px]">
            <h3 class="text-20 leading-22 md:text-40 md:leading-42 xl:text-40 xl:leading-42 font-rubik font-semibold text-white text-center max-w-[298px] md:max-w-[612px] xl:max-w-[655px] mx-auto">Something went wrong.</h3>
            <p class="text-15 leading-22 md:text-19 md:leading-27 xl:text-22 xl:leading-28 font-rubik text-white font-normal text-center max-w-[311px] md:max-w-[547px] xl:max-w-[619px] mx-auto mt-2 md:mt-5">This page does not exist.</p>
        </div>

    </div>
</main>
<?php get_footer(); ?>