<?php
/**
 * Template Name: Showroom
 */

get_header();

//page content
$hero_banner_image = get_field('hero_banner_image');
$page_title = get_field('page_title');
?>

    <div id="page-contact-content">

        <section class="relative w-full bg-cover bg-center" style="height: calc(100vh - 108px); background-image: url(<?= $hero_banner_image['url'] ?>);">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute bottom-12 w-full text-center px-4">
                <h1 class="text-white text-4xl md:text-6xl font-light tracking-wide">
                    <?= $page_title ?>
                </h1>
            </div>
        </section>

        <div class="mx-auto px-4 max-w-screen-2xl py-16">

            <?php
            if (have_rows('content_row')):
                while (have_rows('content_row')) : the_row();

                    // Case: Text Left Image Right.
                    if (get_row_layout() == 'text_left_image_right'):
                        $image = get_sub_field('image');
                        $text = get_sub_field('text');
                        ?>
                        <div class="flex flex-col md:flex-row gap-8 mb-16">
                            <!-- Left (1/3) -->
                            <div class="md:w-1/3 pt-12">
                                <?= $text ?>
                            </div>

                            <!-- Right (2/3) -->
                            <div class="md:w-2/3">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                            </div>
                        </div>
                    <?php

                    // Case: Image Left Text Right.
                    elseif (get_row_layout() == 'image_left_text_right'):
                        $image = get_sub_field('image');
                        $text = get_sub_field('text');
                        ?>
                        <div class="flex flex-col md:flex-row gap-8 mb-16">
                            <!-- Image Left (2/3) -->
                            <div class="md:w-2/3">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                            </div>

                            <!-- Text Right (1/3) -->
                            <div class="md:w-1/3 pt-12">
                                <?= $text ?>
                            </div>
                        </div>
                    <?php

                    endif;
                endwhile;
            endif;
            ?>


            <!-- General Contact Form -->
            <div class="max-w-3xl">
                <div id="contact-page-contact-form-cont">
                    <?php echo do_shortcode('[wpforms id="105" title="false"]'); ?>
                </div>
            </div>


        </div>


    </div>

<?php get_footer(); ?>