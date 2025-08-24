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

            <!-- Book Appointment Section -->
            <section class="py-20 bg-gray-50 -mx-4 px-4 my-20">
                <div class="max-w-screen-2xl mx-auto">
                    <div class="flex flex-col lg:flex-row gap-12 items-start">

                        <!-- Left Column: CTA and Contact Form -->
                        <div class="lg:w-1/2">
                            <!-- Heading/CTA -->
                            <div class="mb-8">
                                <h2 class="text-3xl md:text-4xl font-light tracking-wide mb-4">
                                    Book an Appointment
                                </h2>
                                <p class="text-lg leading-relaxed mb-6">
                                    Experience Minotti's Italian luxury firsthand. Visit our showroom to explore our complete collection and receive personalized design consultation from our expert team.
                                </p>
                                <div class="text-base space-y-2">
                                    <p><strong>What to expect:</strong></p>
                                    <ul class="list-disc list-inside space-y-1 text-gray-700 ml-4">
                                        <li>Private showroom tour</li>
                                        <li>Personal design consultation</li>
                                        <li>Fabric and finish samples</li>
                                        <li>Custom configuration options</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div id="contact-page-contact-form-cont">
                                <?php echo do_shortcode('[wpforms id="105" title="false"]'); ?>
                            </div>
                        </div>

                        <!-- Right Column: Map and Location Info -->
                        <div class="lg:w-1/2">
                            <?php
                            // Determine which showroom content to show based on page ID
                            $current_page_id = get_the_ID();
                            $is_cape_town = ($current_page_id == 19);
                            $is_johannesburg = ($current_page_id == 21);
                            ?>

                            <?php if ($is_cape_town): ?>
                                <!-- Cape Town Map and Info -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-xl font-medium mb-4">Visit Our Cape Town Showroom</h3>
                                        <div class="space-y-3 text-gray-700">
                                            <div>
                                                <p><strong>Address:</strong><br>
                                                    <?= get_field('address', 19) ?: 'Waterway House - North, 3 Dock Road<br>V&A Waterfront, Cape Town, 8001'; ?></p>
                                            </div>
                                            <div>
                                                <p><strong>Contact:</strong><br>
                                                    Tel: <?= get_field('telephone', 19) ?: '+27 21 425 5570'; ?><br>
                                                    Email: <?= get_field('email', 19) ?: 'info@minotti.co.za'; ?></p>
                                            </div>
                                            <div>
                                                <p><strong>Opening Hours:</strong><br>
                                                    <?= get_field('opening_times', 19) ?: 'Monday - Friday: 9:00 - 17:00<br>Saturday: 9:00 - 14:00<br>Sunday: Closed'; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cape Town Map -->
                                    <div>
                                        <a href="https://goo.gl/maps/8DtoZGHRxCp" target="_blank" class="block hover:opacity-90 transition-opacity">
                                            <div class="text-sm mb-2 font-medium">Get Directions</div>
                                            <?php
                                            // Get Cape Town map from contact page (ID 23)
                                            $cape_town_map = get_field('google_map_image', 23);
                                            if ($cape_town_map): ?>
                                                <img src="<?= $cape_town_map['url'] ?>" alt="<?= $cape_town_map['alt'] ?: 'Cape Town Showroom Location' ?>" class="w-full object-cover rounded-lg shadow-lg">
                                            <?php else: ?>
                                                <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                                    <span class="text-gray-500">Map image not available</span>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>

                            <?php else: ?>
                                <!-- Johannesburg Map and Info -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-xl font-medium mb-4">Visit Our Johannesburg Showroom</h3>
                                        <div class="space-y-3 text-gray-700">
                                            <div>
                                                <p><strong>Address:</strong><br>
                                                    <?= get_field('address_joburg', 21) ?: 'Design Quarter<br>Corner William Nicol & Leslie Avenue<br>Fourways, Johannesburg, 2055'; ?></p>
                                            </div>
                                            <div>
                                                <p><strong>Contact:</strong><br>
                                                    Tel: <?= get_field('telephone', 21) ?: '+27 11 467 4200'; ?><br>
                                                    Email: <?= get_field('email', 21) ?: 'joburg@minotti.co.za'; ?></p>
                                            </div>
                                            <div>
                                                <p><strong>Opening Hours:</strong><br>
                                                    <?= get_field('opening_times', 21) ?: 'Monday - Friday: 9:00 - 17:00<br>Saturday: 9:00 - 14:00<br>Sunday: Closed'; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Johannesburg Map -->
                                    <div>
                                        <a href="https://maps.app.goo.gl/LkjS9XFuYdJuK4Ms6" target="_blank" class="block hover:opacity-90 transition-opacity">
                                            <div class="text-sm mb-2 font-medium">Get Directions</div>
                                            <?php
                                            // Get Johannesburg map from contact page (ID 23)
                                            $joburg_map = get_field('google_map_image_joburg', 23);
                                            if ($joburg_map): ?>
                                                <img src="<?= $joburg_map['url'] ?>" alt="<?= $joburg_map['alt'] ?: 'Johannesburg Showroom Location' ?>" class="w-full object-cover rounded-lg shadow-lg">
                                            <?php else: ?>
                                                <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                                    <span class="text-gray-500">Map image not available</span>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cross-Promotion to Other Showroom -->
            <section class="py-16 border-t border-gray-200">
                <div class="text-center max-w-2xl mx-auto">
                    <?php if ($is_cape_town): ?>
                        <!-- From Cape Town, promote Johannesburg -->
                        <h3 class="text-2xl font-light tracking-wide mb-4">
                            Also Visit Our Johannesburg Showroom
                        </h3>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Experience Minotti's Italian luxury in Johannesburg's premier design destination. Our Rosebank showroom offers the same exceptional collection and personalized service in the heart of Gauteng.
                        </p>
                        <a href="<?php echo get_permalink(21); ?>" class="inline-flex items-center gap-2 bg-[#1e1e1e] text-white px-6 py-3 rounded-full hover:bg-gray-800 transition-colors duration-200 text-sm font-medium tracking-wider uppercase">
                            Discover Johannesburg Showroom
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    <?php elseif ($is_johannesburg): ?>
                        <!-- From Johannesburg, promote Cape Town -->
                        <h3 class="text-2xl font-light tracking-wide mb-4">
                            Also Visit Our Cape Town Showroom
                        </h3>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Discover our flagship showroom in Cape Town's iconic V&A Waterfront. Experience Minotti's complete collection in our stunning waterfront location with breathtaking views.
                        </p>
                        <a href="<?php echo get_permalink(19); ?>" class="inline-flex items-center gap-2 bg-[#1e1e1e] text-white px-6 py-3 rounded-full hover:bg-gray-800 transition-colors duration-200 text-sm font-medium tracking-wider uppercase">
                            Discover Cape Town Showroom
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </section>

        </div>

    </div>

<?php get_footer(); ?>