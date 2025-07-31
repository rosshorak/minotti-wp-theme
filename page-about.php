<?php
/**
 * Template Name: About Page
 *
 * @package TailPress
 */

get_header();
?>

    <main class="bg-white">

        <!-- Hero Banner -->
        <?php if ($hero_image = get_field('image_banner')): ?>
            <section class="relative w-full bg-cover bg-center" style="height: 70vh; background-image: url('<?php echo esc_url($hero_image['url']); ?>');">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-16 w-full text-center px-4">
                    <h1 class="text-white text-4xl md:text-6xl font-light tracking-wide">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </section>
        <?php endif; ?>

        <!-- Main Content Introduction -->
        <?php if ($intro_content = get_field('content_1')): ?>
            <section class="pt-20 pb-8">
                <div class="container mx-auto px-4 max-w-6xl">
                    <div class="max-w-4xl mx-auto text-center">
                        <div class="prose prose-lg mx-auto text-center">
                            <?php echo wp_kses_post($intro_content); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Image Pair 1 - Full Width Grid -->
        <?php if (get_field('image_1') || get_field('image_2')): ?>
            <section class="py-12">
                <div class="container mx-auto px-4 max-w-screen-2xl">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <?php if ($image_1 = get_field('image_1')): ?>
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url($image_1['url']); ?>"
                                        alt="<?php echo esc_attr($image_1['alt']); ?>"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        <?php endif; ?>

                        <?php if ($image_2 = get_field('image_2')): ?>
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url($image_2['url']); ?>"
                                        alt="<?php echo esc_attr($image_2['alt']); ?>"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Content 2 with Dark Background -->

        <?php
        $content_2 = get_field('content_2');
        if ($content_2):
            ?>
            <section class="py-20 bg-[#1e1e1e] text-white">
                <div class="container mx-auto px-4 max-w-4xl text-center">
                    <div class="prose prose-lg prose-invert mx-auto">
                        <?php echo wp_kses_post($content_2); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Image Pair 2 - Offset Layout -->
        <?php if (get_field('image_3') || get_field('image_4')): ?>
            <section class="py-20 bg-gray-50">
                <div class="container mx-auto px-4 max-w-screen-2xl">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                        <?php if ($image_3 = get_field('image_3')): ?>
                            <div class="lg:col-span-7">
                                <div class="aspect-[3/2] overflow-hidden">
                                    <img src="<?php echo esc_url($image_3['url']); ?>"
                                            alt="<?php echo esc_attr($image_3['alt']); ?>"
                                            class="w-full h-full object-cover">
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($image_4 = get_field('image_4')): ?>
                            <div class="lg:col-span-5">
                                <div class="aspect-[4/5] overflow-hidden">
                                    <img src="<?php echo esc_url($image_4['url']); ?>"
                                            alt="<?php echo esc_attr($image_4['alt']); ?>"
                                            class="w-full h-full object-cover">
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Content 3 - Centered with Quote Style -->
        <?php if ($content_3 = get_field('content_3')): ?>
            <section class="pt-16">
                <div class="container mx-auto px-4 max-w-4xl">
                    <div class="text-center">
                        <div class="prose prose-xl mx-auto">
                            <?php echo wp_kses_post($content_3); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Image 5 - Full Width Feature -->
        <?php if ($image_5 = get_field('image_5')): ?>
            <section class="py-12">
                <div class="container mx-auto px-4 max-w-screen-2xl">
                    <div class="aspect-[21/9] overflow-hidden">
                        <img src="<?php echo esc_url($image_5['url']); ?>"
                                alt="<?php echo esc_attr($image_5['alt']); ?>"
                                class="w-full h-full object-cover">
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Content 4 with Side Accent -->
        <?php if ($content_4 = get_field('content_4')): ?>
            <section class="py-20">
                <div class="container mx-auto px-4 max-w-6xl">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                        <!-- Accent Line -->
                        <div class="lg:col-span-1 hidden lg:block">
                            <div class="w-1 h-32 bg-[#1e1e1e] mx-auto"></div>
                        </div>

                        <!-- Content -->
                        <div class="lg:col-span-10">
                            <div class="prose prose-lg mx-auto">
                                <?php echo wp_kses_post($content_4); ?>
                            </div>
                        </div>

                        <div class="lg:col-span-1"></div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Image 6 - Contained Width -->
        <?php if ($image_6 = get_field('image_6')): ?>
            <section class="py-16 bg-gray-50">
                <div class="container mx-auto px-4 max-w-5xl">
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="<?php echo esc_url($image_6['url']); ?>"
                                alt="<?php echo esc_attr($image_6['alt']); ?>"
                                class="w-full h-full object-cover">
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Content 5 - Final Statement -->
        <?php if ($content_5 = get_field('content_5')): ?>
            <section class="py-20">
                <div class="container mx-auto px-4 max-w-4xl text-center">
                    <div class="prose prose-lg mx-auto">
                        <?php echo wp_kses_post($content_5); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Final Image Pair - Gallery Style -->
        <?php if (get_field('image_7') || get_field('image_8')): ?>
            <section class="pb-20">
                <div class="container mx-auto px-4 max-w-screen-2xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <?php if ($image_7 = get_field('image_7')): ?>
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url($image_7['url']); ?>"
                                        alt="<?php echo esc_attr($image_7['alt']); ?>"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        <?php endif; ?>

                        <?php if ($image_8 = get_field('image_8')): ?>
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url($image_8['url']); ?>"
                                        alt="<?php echo esc_attr($image_8['alt']); ?>"
                                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </section>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>