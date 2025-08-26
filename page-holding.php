<?php
/**
 * Template Name: Holding Page
 * 
 * A temporary holding page with hero slider and minimal navigation
 *
 * @package TailPress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white antialiased'); ?>>
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">
    <?php do_action('tailpress_header'); ?>

    <header class="bg-[#1e1e1e] text-white relative" style="height: 100px;">
        <div class="container mx-auto px-4">
            
            <!-- Mobile Header -->
            <div class="lg:hidden flex items-center justify-center py-6">
                <div>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Minotti-Logo-SA.png" alt="Logo" class="w-[160px]">
                    </a>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex w-full items-center justify-center py-6">
                <!-- Logo centered -->
                <div>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Minotti-Logo-SA.png" alt="Logo" class="mx-auto w-[160px] d-block">
                    </a>
                </div>
            </div>

        </div>
    </header>

    <div id="content" class="site-content grow bg-[#1e1e1e]">
        <?php do_action('tailpress_content_start'); ?>
        <main>
            <div class="relative">
                <?php
                    echo do_shortcode('[smartslider3 slider="2"]');
                ?>
                
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="text-center text-white">
                        <h1 class="text-3xl md:text-4xl font-light tracking-widest mb-8">
                            NEW SHOWROOM // OPENING SOON
                        </h1>
                        <div class="mt-12">
                            <a href="https://www.minotti.com/en" target="_blank" class="inline-block border border-white px-8 py-3 text-sm font-semibold tracking-widest hover:bg-white hover:text-black transition-colors duration-300 pointer-events-auto">
                                BROWSE THE COLLECTION
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <?php do_action('tailpress_content_end'); ?>

        <footer class="bg-[#1e1e1e] text-white py-4">
            <div class="container mx-auto px-4 text-center">
                <p class="text-sm tracking-widest mb-0">© <?php echo date('Y'); ?> Minotti. All rights reserved.</p>
            </div>
        </footer>
    </div>


</div>

<?php do_action('tailpress_site_after'); ?>
<?php wp_footer(); ?>
</body>
</html>