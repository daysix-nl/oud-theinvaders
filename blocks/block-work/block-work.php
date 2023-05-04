<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="grid grid-cols-1 md:grid-cols-2 bg-[#071218]">
        <div class="col-span-1">
            <?php $allowed_blocks_inner = ['acf/inner-block-post-image', 'acf/inner-block-post-video',]; ?>
            <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks_inner)); ?>" />
        </div>
        <div
            class="col-span-1 order-first md:order-last h-full mx-2 md:ml-[45px] xl:ml-5 md:mr-[35px] xl:mr-4 mt-[145px] md:mt-[130px] xl:mt-[150px] pb-4 md:pb-4 xl:pb-9">
            <div class="flex flex-col mb-5 md:mb-9">
                <div class="md:text-end flex flex-col">
                    <!-- KLant -->
                    <?php if (get_field('klant')): ?>
                        <h1
                            class="text-white font-rubik font-normal text-18 leading-30 md:text-19 md:leading-27 xl:text-22 xl:leading-30">
                            <span class="font-bold">
                                <?php the_field('client', 'options'); ?>
                            </span>
                            <?php the_field("klant"); ?>
                        </h1>
                    <?php endif; ?>
                    <!--Case -->
                    <?php if (get_field('case')): ?>
                        <h2
                            class="text-white font-rubik font-normal text-18 leading-30 md:text-19 md:leading-27 xl:text-22 xl:leading-30">
                            <span class="font-bold">
                                <?php the_field('case', 'options'); ?>
                            </span>
                            <?php the_field("case"); ?>
                        </h2>
                    <?php endif; ?>
                    <!-- Partner -->
                    <?php if (get_field('partner')): ?>
                        <p
                            class="text-white font-rubik font-normal text-18 leading-30 md:text-19 md:leading-27 xl:text-22 xl:leading-30">
                            <span class="font-bold">
                                <?php the_field('partner', 'options'); ?>
                            </span>
                            <?php the_field("partner"); ?>
                        </p>
                    <?php endif; ?>
                    <!--Game-->
                    <?php if (get_field('game')): ?>
                        <p
                            class="text-white font-rubik font-normal text-18 leading-30 md:text-19 md:leading-27 xl:text-22 xl:leading-30 ">
                            <span class="font-bold">
                                <?php the_field('game', 'options'); ?>
                            </span>
                            <?php the_field("game"); ?>
                        </p>
                    <?php endif; ?>

                    <!--Platform-->
                    <?php if (get_field('platform')): ?>
                        <p
                            class="text-white font-rubik font-normal text-18 leading-30 md:text-19 md:leading-27 xl:text-22 xl:leading-30 ">
                            <span class="font-bold">
                                <?php the_field('platform', 'options'); ?>
                            </span>
                            <?php the_field("platform"); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <!--Buzz -->
                <?php if (get_field('buzz')): ?>
                    <h1
                        class="text-white font-space font-semibold text-24 leading-30 md:text-27 md:leading-28 xl:text-31 xl:leading-32 text-end xl:max-w-[90%] md:max-w-[90%] max-w-[90%] ml-auto mt-5 md:mt-4">
                        <?php the_field("buzz"); ?>
                    </h1>
                <?php endif; ?>
                <!-- Bron -->
                <?php if (get_field('bron')): ?>
                    <p
                        class="text-white font-rubix font-normal xl:text-22 xl:leading-30 md:text-19 md:leading-27 text-18 leading-35 ml-auto text-end mt-2">
                        <?php the_field("bron"); ?>
                    </p>
                <?php endif; ?>
            </div>
            <div>

                <!-- Challange -->
                <?php if (get_field('challenge')): ?>
                    <p
                        class="text-white font-rubik font-semibold text-18 leading-25 md:text-22 md:leading-30 xl:text-26 xl:leading-36 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field("challenge"); ?>
                    </p>
                <?php endif; ?>

                <!-- Pitch -->
                <?php if (get_field('pitch')): ?>
                    <p
                        class="text-white font-rubik font-bold text-15 leading-22  md:text-19 md:leading-27  xl:text-22 xl:leading-30 mt-3 md:mt-5 xl:mt-6 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field('pitch', 'options'); ?>
                    </p>
                    <div
                        class="wysiwyg text-white font-rubik font-normal text-15 leading-22  md:text-19 md:leading-27  xl:text-22 xl:leading-30 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field("pitch"); ?>
                    </div>
                <?php endif; ?>
                <!-- Results -->
                <?php if (get_field('results')): ?>
                    <p
                        class="text-white font-rubik font-bold text-15 leading-22  md:text-19 md:leading-27  xl:text-22 xl:leading-30 mt-3 md:mt-5 xl:mt-6 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field('results', 'options'); ?>
                    </p>
                    <div
                        class="wysiwyg text-white font-rubik font-normal text-15 leading-22  md:text-19 md:leading-27  xl:text-22 xl:leading-30 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field("results"); ?>
                    </div>
                <?php endif; ?>
                <!-- CTA -->
                <?php if (get_field('cta')): ?>
                    <p
                        class="text-white font-rubik font-normal text-15 leading-22  md:text-19 md:leading-27  xl:text-22 xl:leading-30 mt-3 md:mt-5 xl:mt-6 xl:max-w-[90%] md:max-w-[90%] max-w-[100%] mr-auto">
                        <?php the_field("cta"); ?>
                    </p>
                <?php endif; ?>
                <!-- Button CTA -->
                <a class="flex cursor-pointer uppercase text-white text-25 leading-35 md:text-19 md:leading-35 font-space font-bold border-[3px] justify-center items-center border-white hover:bg-[#ffffff26] duration-300 w-full h-6 md:w-[180px] md:h-5 mt-4 xl:mt-6 mb-3"
                    id="popup">
                    <?php the_field('learn_more', 'options'); ?>
                </a>
            </div>
            <!-- Button all cases -->
            <div class="hidden md:flex">
                <a class="allcases text-19 leading-27 xl:text-22 xl:leading-30 text-white font-rubik font-normal xl:mt-5 md:mt-4 ml-auto flex justify-center items-center hover:text-bluesoft"
                    href="<?php the_field('all_cases_link', 'options'); ?>"><?php include get_template_directory() . '/img/local/cases.php'; ?> <span class="ml-3 xl:ml-2">
                        <?php the_field('all_cases', 'options'); ?>
                    </span></a>
            </div>
        </div>
        <!-- Button all cases -->
        <div class="flex md:hidden mt-3 mb-3">
            <a class="allcases text-16 leading-35 text-white font-rubik font-normal mx-auto flex justify-center items-center hover:text-bluesoft"
                href="<?php the_field('all_cases_link', 'options'); ?>"><?php include get_template_directory() . '/img/local/cases.php'; ?> <span class="ml-3 xl:ml-2">
                    <?php the_field('all_cases', 'options'); ?>
                </span></a>
        </div>
    </section>

<?php endif; ?>