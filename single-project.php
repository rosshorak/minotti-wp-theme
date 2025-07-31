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
    $gallery = get_field('gallery_images');
    $featured_products = get_field('featured_products');
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


            <div>
                <?= do_shortcode('[smartslider3 slider="3"]') ?>
            </div>
        </div>
    </section>


    <!-- Gallery Section -->
    <?php if ($gallery && count($gallery) > 1): ?>
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 max-w-screen-2xl">
                <h3 class="text-2xl font-light text-center mb-12">Project Gallery</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach (array_slice($gallery, 1) as $image): ?>
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" 
                                 alt="<?php echo esc_attr($image['alt']); ?>" 
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-700 cursor-pointer">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php 
endwhile;
get_footer(); 
?>