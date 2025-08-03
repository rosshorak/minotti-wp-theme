<?php
/**
 * Template part for displaying featured collections section
 *
 * @package TailPress
 */
?>

<section id="featured-collections" class="pt-28 pb-32 bg-gray-50">
    <div class="container mx-auto px-4 max-w-screen-2xl">

        <!-- Section Header -->
        <div class="minotti-section-header text-center">Featured Collections</div>
        <div class="mb-14 text-center uppercase text-sm tracking-wider opacity-70">
            Discover Our Signature Pieces
        </div>

        <!-- Collections Grid -->
        <?php if (have_rows('featured_collection')): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <?php while (have_rows('featured_collection')): the_row();
                    $name = get_sub_field('name');
                    $url = get_sub_field('url');
                    $image = get_sub_field('image');
                    ?>

                    <!-- Collection Item -->
                    <div class="group cursor-pointer">
                        <a href="<?php echo esc_url($url); ?>" target="_blank" class="block">
                            <!-- Image container with correct aspect ratio 1600x1000 = 8:5 -->
                            <div class="aspect-[8/5] overflow-hidden bg-white">
                                <?php if ($image): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt'] ?: $name . ' Collection'); ?>"
                                        class="w-full h-full object-cover">
                                <?php else: ?>
                                    <!-- Fallback placeholder if no image -->
                                    <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-400 text-lg">No Image</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Collection Name - Always displays -->
                            <div class="text-lg text-center leading-[20px] font-medium text-[rgb(30,30,30)] mt-4 uppercase tracking-widest">
                                <?php echo esc_html($name); ?>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>

        <?php else: ?>
            <!-- Fallback content if no collections are added -->
            <div class="text-center py-12">
                <p class="text-gray-600">No featured collections have been added yet.</p>
            </div>
        <?php endif; ?>

    </div>
</section>