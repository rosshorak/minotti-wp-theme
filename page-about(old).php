<?php /* Template Name: About Page */ ?>

<?php get_header(); ?>

<main class="bg-white">
    <!-- Hero Banner -->
    <?php if ($image = get_field('image_banner')): ?>
        <section class="w-full">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full">
        </section>
    <?php endif; ?>

    <!-- Intro Paragraph -->
    <?php if ($content = get_field('content_1')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="text-center space-y-6">
                    <?php echo wp_kses_post($content); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Image Pair 1 -->
    <section class="py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php if ($image = get_field('image_1')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
            <?php if ($image = get_field('image_2')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>
    </section>

    <!-- Content 2 -->
    <?php if ($content = get_field('content_2')): ?>
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-4 max-w-3xl text-center">
                <?php echo wp_kses_post($content); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Image Pair 2 -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php if ($image = get_field('image_3')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
            <?php if ($image = get_field('image_4')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>
    </section>

    <!-- Content 3 -->
    <?php if ($content = get_field('content_3')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4 max-w-3xl text-center">
                <?php echo wp_kses_post($content); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Image 5 (Wide Image) -->
    <?php if ($image = get_field('image_5')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full">
            </div>
        </section>
    <?php endif; ?>

    <!-- Content 4 -->
    <?php if ($content = get_field('content_4')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4 max-w-3xl text-center">
                <?php echo wp_kses_post($content); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Image 6 (Full-width) -->
    <?php if ($image = get_field('image_6')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full">
            </div>
        </section>
    <?php endif; ?>

    <!-- Content 5 -->
    <?php if ($content = get_field('content_5')): ?>
        <section class="py-20">
            <div class="container mx-auto px-4 max-w-3xl text-center">
                <?php echo wp_kses_post($content); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Image Pair 4 -->
    <section class="py-20">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php if ($image = get_field('image_7')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
            <?php if ($image = get_field('image_8')): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>