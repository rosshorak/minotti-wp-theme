<?php
/**
 * Template Name: Home Front Page
 *
 * @package TailPress
 */

get_header();
?>

<div>
    <?php
        echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>

<div>

    <?php
        get_template_part('template-parts/front-page-intro-about');
        get_template_part('template-parts/front-page-showrooms');
        get_template_part('template-parts/front-page-featured-project');
        get_template_part('template-parts/front-page-featured-collections');
    ?>


</div>

<?php
get_footer();
