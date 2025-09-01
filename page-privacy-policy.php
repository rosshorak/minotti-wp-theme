<?php
/**
 * Template Name: Privacy Policy
 */

get_header();
?>

<div id="page-privacy-policy-content">

    <section class="mx-auto px-4 max-w-screen-xl py-20">
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl font-light tracking-wide text-center">
                <?= get_the_title() ?>
            </h1>
        </div>
        
        <div class="prose prose-lg max-w-none">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>