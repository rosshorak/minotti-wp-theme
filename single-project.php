<?php
/**
 * Single Project Template
 * 
 * @package TailPress
 */

get_header();

while (have_posts()) : the_post();
    
    $title = get_field('title');
    $project_location = get_field('project_location');
    $project_subtitle = get_field('project_subtitle');
    $project_type = get_field('project_type');
    $hero_image = get_field('hero_image');
    $project_description = get_field('project_description');
    $interior_design_project = get_field('interior_design_project');
    $year = get_field('year');
    $furniture_supplier = get_field('furniture_supplier');
    $photography = get_field('photography');
    $featured_products = get_field('featured_products');
    $smart_slider_gallery_id = get_field('smart_slider_gallery_id');
?>

<main class="bg-white">

    <!-- Hero Section -->
    <?php if ($hero_image): ?>
        <section class="relative w-full bg-cover bg-center" style="height: 70vh; background-image: url('<?php echo esc_url($hero_image['url']); ?>');">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute inset-0 flex items-center justify-center text-white text-center">
                <div>
                    <h1 class="minotti-section-header mb-4">
                        <?php echo esc_html($title); ?>, <?php echo esc_html($project_subtitle); ?>
                    </h1>
                    <?php if ($project_type): ?>
                        <div class="tracking-widest mb-2"><?php echo esc_html($project_type); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Project Details Section -->
    <!-- Project Details Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-screen-2xl">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Main Content (8/12) - Wider content -->
                <div class="lg:col-span-8">
                    <?php if ($project_description): ?>
                        <div class="prose prose-lg max-w-none">
                            <!-- Large decorative first letter -->
                            <div class="first-letter:text-7xl first-letter:font-light first-letter:leading-none">
                                <?php echo wp_kses_post(wpautop($project_description)); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar Info (4/12) - Narrower sidebar -->
                <div class="lg:col-span-4">
                    <div class="space-y-6">

                        <!-- Location -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="font-medium">Location</div>
                            <div class="text-gray-600"><?php echo esc_html($project_location); ?>, South Africa</div>
                        </div>

                        <!-- Year -->
                        <?php if ($year): ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="font-medium">Year</div>
                                <div class="text-gray-600"><?php echo esc_html($year); ?></div>
                            </div>
                        <?php endif; ?>

                        <!-- Interior Design Project -->
                        <?php if ($interior_design_project): ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="font-medium">Interior Design Project</div>
                                <div class="text-gray-600"><?php echo esc_html($interior_design_project); ?></div>
                            </div>
                        <?php endif; ?>

                        <!-- Furniture Supplier -->
                        <?php if ($furniture_supplier): ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="font-medium">Furniture supplier</div>
                                <div class="text-gray-600"><?php echo esc_html($furniture_supplier); ?></div>
                            </div>
                        <?php endif; ?>

                        <!-- Photography -->
                        <?php if ($photography): ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="font-medium">Photography</div>
                                <div class="text-gray-600"><?php echo esc_html($photography); ?></div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>


            <?php if (!empty($smart_slider_gallery_id) && $smart_slider_gallery_id > 0): ?>
                <div>
                    <?= do_shortcode('[smartslider3 slider="' . esc_attr($smart_slider_gallery_id) . '"]') ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- More Projects Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-screen-2xl">

            <div class="text-center mb-16">
                <h2 class="minotti-section-header">View More Projects</h2>
                <div class="text-center uppercase text-sm tracking-wider opacity-70">
                    Explore Our Portfolio
                </div>
            </div>

            <?php
            // Get other projects (excluding current project)
            $current_project_id = get_the_ID();
            $other_projects = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => 6, // Show 6 other projects
                'post_status' => 'publish',
                'post__not_in' => array($current_project_id),
                'orderby' => 'rand', // Random order to show variety
            ));

            if ($other_projects->have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <?php while ($other_projects->have_posts()) : $other_projects->the_post();
                        $other_title = get_field('title');
                        $other_project_subtitle = get_field('project_subtitle');
                        $other_project_location = get_field('project_location');
                        $other_hero_image = get_field('hero_image');
                        ?>

                        <article class="group">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <!-- Project Image -->
                                <?php if ($other_hero_image): ?>
                                    <div class="aspect-[4/3] overflow-hidden mb-4">
                                        <img src="<?php echo esc_url($other_hero_image['sizes']['large'] ?? $other_hero_image['url']); ?>"
                                            alt="<?php echo esc_attr($other_hero_image['alt']); ?>"
                                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                                    </div>
                                <?php endif; ?>

                                <!-- Project Details -->
                                <div class="space-y-2">
                                    <h3 class="text-lg font-medium text-zinc-900 group-hover:opacity-80 transition-opacity">
                                        <?php echo esc_html($other_title); ?><?php if ($other_project_subtitle): ?>, <?php echo esc_html($other_project_subtitle); ?><?php endif; ?>
                                    </h3>

                                    <?php if ($other_project_location): ?>
                                        <div class="text-sm text-zinc-600 uppercase tracking-wider">
                                            <?php echo esc_html($other_project_location); ?>, South Africa
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

                <!-- View All Projects Button -->
                <div class="text-center">
                    <a href="<?php echo get_post_type_archive_link('project'); ?>"
                        class="inline-flex items-center px-8 py-3 bg-[#1e1e1e] text-white text-sm font-semibold tracking-wider uppercase hover:bg-[#333] transition-colors duration-200 rounded-full">
                        View All Projects →
                    </a>
                </div>

            <?php endif;

            wp_reset_postdata();
            ?>

        </div>
    </section>


</main>

<?php 
endwhile;
get_footer(); 
?>