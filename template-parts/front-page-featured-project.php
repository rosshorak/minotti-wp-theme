<?php
/**
 * Template part for displaying featured project section (Minotti homepage style)
 */

// Get the featured project for homepage
$featured_project = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => 'featured_on_homepage',
            'value' => '1',
            'compare' => '='
        )
    )
));

if ($featured_project->have_posts()) :
    while ($featured_project->have_posts()) : $featured_project->the_post();

        $title = get_field('title');
        $project_subtitle = get_field('project_subtitle');
        $hero_image = get_field('hero_image');

        ?>

    <section id="projects" class="pt-16">
        <div class="minotti-section-header text-center">Be Inspired</div>
        <div class="mb-14 text-center uppercase text-sm tracking-wider">
            Featured Project: <a href="<?php echo get_permalink(); ?>" class="hover:font-medium uppercase text-sm tracking-wider">Cape Town, Planted Pavilion</a>
        </div>

        <div class="relative w-full bg-cover bg-center" style="height: 80vh; background-image: url('<?php echo esc_url($hero_image['url']); ?>');">
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- Project Text Overlay - BOTTOM CENTER -->
            <div class="absolute bottom-16 left-0 right-0 text-white text-center">
                <a href="<?php the_permalink(); ?>" class="block hover:opacity-80 transition-opacity group">
                    <h3 class="minotti-section-header mb-4">
                        <?php echo esc_html($title); ?><?php if ($project_subtitle): ?>, <?php echo esc_html($project_subtitle); ?><?php endif; ?>
                    </h3>
                    <div class="tracking-wider text-sm uppercase">
                        View project →
                    </div>
                </a>
            </div>

            <!-- Hidden image for SEO/fallback -->
            <img src="<?php echo esc_url($hero_image['url']); ?>"
                    alt="<?php echo esc_attr($hero_image['alt']); ?>"
                    class="hidden">
        </div>
    </section>
    <?php
    endwhile;
    wp_reset_postdata();
endif;
?>