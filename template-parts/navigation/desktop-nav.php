<?php
/**
 * Desktop Navigation Template Part
 *
 * @package TailPress
 */
?>

<div class="hidden lg:flex w-full items-center justify-center">
    <!-- Left side -->
    <div class="flex items-center gap-6">
        <!-- Products with Mega Dropdown -->
        <?php get_template_part('template-parts/navigation/products-mega-dropdown'); ?>

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