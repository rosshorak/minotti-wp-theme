<?php
/**
 * Template Name: Contact Page
 */

get_header();

//page content
$hero_banner_image = get_field('hero_banner_image');
$page_title = get_field('contact_page_title');

$info_paragraph = get_field('info_paragraph');
$showroom_image_url = get_field('showroom_image')['url'];
$showroom_image_alt = get_field('showroom_image')['alt'];
$google_map_url = get_field('google_map_image')['url'];
$google_map_alt = get_field('google_map_image')['alt'];
$google_map_url_joburg = get_field('google_map_image_joburg')['url'];
$google_map_alt_joburg = get_field('google_map_image_joburg')['alt'];
$address = get_field('address');
$address_joburg = get_field('address_joburg');
$opening_times = get_field('opening_times');
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

        <section class="mx-auto px-4 max-w-screen-2xl py-20">

            <div class="mb-16 w-[1080px] max-w-full mx-auto">
                <p class="text-lg text-center">Welcome to Minotti Cape Town & Johannesburg. For enquiries, assistance, or showroom appointments, please reach out using the contact details below. Our team will respond as promptly as possible.</p>
            </div>

            <div class="flex flex-col md:flex-row gap-12">

                <!-- Info Column -->
                <div class="md:w-1/2 space-y-6">

                    <!-- Showroom and Studio Details -->
                    <?php
                    $telephone_1 = get_field('telephone_1');
                    $email_1 = get_field('email_1');
                    $telephone_2 = get_field('telephone_2');
                    $email_2 = get_field('email_2');
                    ?>
                    <div class="flex flex-col sm:flex-row gap-6">

                        <!-- Cape Town -->
                        <div class="sm:w-1/2">
                            <div>
                                <h3 class="text-lg font-medium mb-2">Cape Town</h3>
                            </div>
                            <?= $telephone_1; ?><br>
                            <a href="mailto:<?= $email_1; ?>">
                                <?= $email_1; ?>
                            </a>
                        </div>

                        <!-- Johannesburg -->
                        <div class="sm:w-1/2">
                            <div>
                                <h3 class="text-lg font-medium mb-2">Johannesburg</h3>
                            </div>
                            <?= $telephone_2; ?><br>
                            <a href="mailto:<?= $email_2; ?>">
                                <?= $email_2; ?>
                            </a>
                        </div>
                    </div>

                    <!-- Info Paragraph -->
                    <div>
                        <?php echo $info_paragraph; ?>
                    </div>

                    <!-- General Contact Form -->
                    <div id="contact-page-contact-form-cont">
                        <?php echo do_shortcode('[wpforms id="105" title="false"]'); ?>
                    </div>

                    <!-- Opening Times -->
                    <div>
                        <h3 class="text-lg font-medium mb-2">Opening Times</h3>
                        <?php echo $opening_times; ?>
                    </div>


                    <!-- Physical Address -->
                    <div class="flex flex-col sm:flex-row gap-6">
                        <!-- Cape Town -->
                        <div class="sm:w-1/2">
                            <h3 class="text-lg font-medium mb-2">Cape Town</h3>
                            <?php echo $address; ?>
                        </div>

                        <!-- Johannesburg -->
                        <div class="sm:w-1/2">
                            <h3 class="text-lg font-medium mb-2">Johannesburg</h3>
                            <?php echo $address_joburg; ?>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->
                <div class="md:w-1/2 space-y-6 contact-page-images">
                    <div>
                        <a href="https://goo.gl/maps/8DtoZGHRxCp" target="_blank" class="block">
                            <div class="text-sm mb-1.5 font-medium">Cape Town Showroom</div>
                            <img src="<?php echo $google_map_url ?>" alt="<?php echo $google_map_url; ?>" class="w-full object-cover">
                        </a>
                    </div>
                    <div>
                        <a href="https://maps.app.goo.gl/CGwTqe92x7EhsrZa8" target="_blank" class="block">
                            <div class="text-sm mb-1.5 font-medium">Johannesburg Showroom</div>
                            <img src="<?php echo $google_map_url_joburg ?>" alt="<?php echo $google_map_url_joburg; ?>" class="w-full object-cover">
                        </a>
                    </div>
                </div>

            </div>
        </section>


    </div>

<?php get_footer(); ?>