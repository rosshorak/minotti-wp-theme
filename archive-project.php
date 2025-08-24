<?php
/**
 * Archive template for Projects
 *
 * @package TailPress
 */

get_header();
?>

    <main class="bg-white">

        <!-- Featured Project Section -->
        <?php
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

                <section class="pt-16">
                    <div class="minotti-section-header text-center">Featured Project</div>
                    <div class="mb-14 text-center uppercase text-sm tracking-wider">
                        <a href="<?php echo get_permalink(); ?>" class="hover:font-medium uppercase text-sm tracking-wider">
                            <?php echo esc_html($title); ?><?php if ($project_subtitle): ?>, <?php echo esc_html($project_subtitle); ?><?php endif; ?>
                        </a>
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

        <!-- All Projects Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4 max-w-screen-2xl">

                <div class="text-center mb-16">
                    <h2 class="minotti-section-header">All Projects</h2>
                    <div class="text-center uppercase text-sm tracking-wider opacity-70">
                        Explore Our Complete Portfolio
                    </div>
                </div>

                <?php
                // Get all projects excluding the featured one
                $featured_project_id = null;
                if ($featured_project->have_posts()) {
                    $featured_project->rewind_posts();
                    $featured_project->the_post();
                    $featured_project_id = get_the_ID();
                    wp_reset_postdata();
                }

                $projects_query = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'post__not_in' => $featured_project_id ? array($featured_project_id) : array(),
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));

                if ($projects_query->have_posts()) : ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while ($projects_query->have_posts()) : $projects_query->the_post();
                            $title = get_field('title');
                            $project_subtitle = get_field('project_subtitle');
                            $project_location = get_field('project_location');
                            $hero_image = get_field('hero_image');
                            ?>

                            <article class="group">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <!-- Project Image -->
                                    <?php if ($hero_image): ?>
                                        <div class="aspect-[4/3] overflow-hidden mb-4">
                                            <img src="<?php echo esc_url($hero_image['sizes']['large'] ?? $hero_image['url']); ?>"
                                                alt="<?php echo esc_attr($hero_image['alt']); ?>"
                                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                                        </div>
                                    <?php endif; ?>

                                    <!-- Project Details -->
                                    <div class="space-y-2">
                                        <h3 class="text-lg font-medium text-zinc-900 group-hover:opacity-80 transition-opacity">
                                            <?php echo esc_html($title); ?><?php if ($project_subtitle): ?>, <?php echo esc_html($project_subtitle); ?><?php endif; ?>
                                        </h3>

                                        <?php if ($project_location): ?>
                                            <div class="text-sm text-zinc-600 uppercase tracking-wider">
                                                <?php echo esc_html($project_location); ?>, South Africa
                                            </div>
                                        <?php endif; ?>

                                        <div class="text-sm text-zinc-500 group-hover:text-zinc-700 transition-colors">
                                            View Project →
                                        </div>
                                    </div>
                                </a>
                            </article>

                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="text-center py-16">
                        <p class="text-zinc-600 text-lg">No projects found.</p>
                    </div>
                <?php endif;

                wp_reset_postdata();
                ?>

            </div>
        </section>

    </main>

<?php
get_footer();
?>