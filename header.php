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

    <header class="bg-[#1e1e1e] text-white py-6 relative">
        <div class="container mx-auto px-4">
            <!-- Desktop Nav -->
            <div class="hidden md:flex w-full items-center justify-center">
                <!-- Left side -->
                <div class="flex items-center gap-6">
                    <!-- Products with Mega Dropdown -->
                    <div class="relative group">
                        <a href="https://www.minotti.com/en/products"
                            target="_blank"
                            class="text-sm font-semibold tracking-widest hover:opacity-80 flex items-center gap-1">
                            Products
                            <svg class="w-3 h-3 opacity-60" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>

                        <!-- Mega Dropdown - Full Width -->
                        <div class="fixed top-[108px] left-0 w-full bg-[#1e1e1e] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out z-50 border-t border-gray-600">
                            <div class="container mx-auto px-4 max-w-screen-xl">
                                <div class="grid grid-cols-5 gap-6 py-8">

                                    <!-- Column 1: INDOOR with title -->
                                    <div class="col-span-1">
                                        <div class="mb-4">
                                            <span class="text-sm font-medium uppercase tracking-wider block mb-1">INDOOR</span>
                                            <a href="https://www.minotti.com/en/indoor" target="_blank"
                                                class="text-xs text-gray-400 hover:text-white uppercase">View all</a>
                                        </div>
                                        <ul class="space-y-2">
                                            <li>
                                                <a href="https://www.minotti.com/en/sofas" target="_blank" class="text-sm text-gray-300 hover:text-white block">Sofas</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/chaise-longue" target="_blank" class="text-sm text-gray-300 hover:text-white block">Chaise longue</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/armchairs" target="_blank" class="text-sm text-gray-300 hover:text-white block">Armchairs</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/accessories" target="_blank" class="text-sm text-gray-300 hover:text-white block">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/chairs-and-stools" target="_blank" class="text-sm text-gray-300 hover:text-white block">Little armchairs and stools</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/tables" target="_blank" class="text-sm text-gray-300 hover:text-white block">Tables</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/coffee-tables" target="_blank" class="text-sm text-gray-300 hover:text-white block">Coffee tables</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: INDOOR continued -->
                                    <div class="col-span-1">
                                        <ul class="space-y-2 pt-10">
                                            <li>
                                                <a href="https://www.minotti.com/en/console-tables" target="_blank" class="text-sm text-gray-300 hover:text-white block">Console tables</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/bookcases-and-sideboards" target="_blank" class="text-sm text-gray-300 hover:text-white block">Bookcases and sideboards</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/rugs" target="_blank" class="text-sm text-gray-300 hover:text-white block">Rugs</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/beds" target="_blank" class="text-sm text-gray-300 hover:text-white block">Beds</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/night-tables" target="_blank" class="text-sm text-gray-300 hover:text-white block">Night-tables</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/bedwear" target="_blank" class="text-sm text-gray-300 hover:text-white block">Bedwear</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: OUTDOOR -->
                                    <div class="col-span-1">
                                        <div class="mb-4">
                                            <span class="text-sm font-medium uppercase tracking-wider block mb-1">OUTDOOR</span>
                                            <a href="https://www.minotti.com/en/outdoor" target="_blank"
                                                class="text-xs text-gray-400 hover:text-white uppercase">View all</a>
                                        </div>
                                        <ul class="space-y-2">
                                            <li>
                                                <a href="https://www.minotti.com/en/sofas?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Sofas</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/chaise-longue?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Chaise longue</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/armchairs_2?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Sunloungers</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/armchairs?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Armchairs</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/accessories?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/chairs-and-stools?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Little armchairs and stools</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/tables?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Tables</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/coffee-tables?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Coffee tables</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/rugs?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Rugs</a>
                                            </li>
                                            <li>
                                                <a href="https://www.minotti.com/en/bedwear?t=10039" target="_blank" class="text-sm text-gray-300 hover:text-white block">Bedwear</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Column 4: HOSPITALITY Image -->
                                    <?php
                                    $block_1_text = get_field('block_1_text', 'option');
                                    $block_1_url = get_field('block_1_url', 'option');
                                    $block_1_image = get_field('block_1_image', 'option');
                                    ?>
                                    <div class="col-span-1">
                                        <a href="<?= $block_1_url; ?>" target="_blank" class="block group">
                                            <span class="text-sm font-medium uppercase tracking-wider block mb-3 group-hover:text-gray-300"><?= $block_1_text; ?></span>
                                            <div class="aspect-[324/205] overflow-hidden">
                                                <img
                                                    src="<?= $block_1_image['url']; ?>"
                                                    alt="<?= $block_1_image['alt']; ?>"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Column 5: STUDIO COLLECTION Image -->
                                    <?php
                                    $block_2_text = get_field('block_2_text', 'option');
                                    $block_2_url = get_field('block_2_url', 'option');
                                    $block_2_image = get_field('block_2_image', 'option');
                                    ?>
                                    <div class="col-span-1">
                                        <a href="<?= $block_2_url; ?>" target="_blank" class="block group">
                                            <span class="text-sm font-medium uppercase tracking-wider block mb-3 group-hover:text-gray-300"><?= $block_2_text; ?></span>
                                            <div class="aspect-[324/205] overflow-hidden">
                                                <img src="<?= $block_2_image['url']; ?>"
                                                    alt="<?= $block_2_image['alt']; ?>"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    // Other left menu items
                    wp_nav_menu([
                        'theme_location' => 'left_menu',
                        'container' => false,
                        'menu_class' => 'flex gap-10 text-sm font-semibold tracking-widest',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>

                <!-- Logo centered -->
                <div class="shrink-1 mx-14">
                    <div>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Minotti-Logo.png" alt="Logo" class="mx-auto w-[160px] d-block">
                            <div class="uppercase text-xs font-semibold mt-2 opacity-80">Cape Town | Johannesburg</div>
                        </a>
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex items-center gap-6 justify-end">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'right_menu',
                        'container' => false,
                        'menu_class' => 'flex gap-10 text-sm font-semibold tracking-widest',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div class="w-full md:hidden mt-6">
                <nav>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex flex-col space-y-4 text-sm text-white',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <div id="content" class="site-content grow">
        <?php do_action('tailpress_content_start'); ?>
        <main>