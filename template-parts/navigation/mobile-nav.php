<?php
/**
 * Mobile Navigation Template Part
 *
 * @package TailPress
 */
?>

<nav id="primary-navigation" class="lg:hidden hidden bg-[#4f4f4f] -mx-4">
    <div>
        <!-- Products Section for Mobile -->
        <div class="products-mobile">
            <div>
                <a href="https://www.minotti.com/en/products" target="_blank"
                    class="text-lg uppercase tracking-wider text-white hover:text-gray-300">
                    Products
                </a>
            </div>
            <div class="ml-4 space-y-2 sub-menu">
                <a href="https://www.minotti.com/en/indoor" target="_blank"
                    class="block text-sm text-gray-300 hover:text-white">Indoor</a>
                <a href="https://www.minotti.com/en/outdoor" target="_blank"
                    class="block text-sm text-gray-300 hover:text-white">Outdoor</a>
            </div>
        </div>

        <!-- Main Menu Items -->
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'link_before' => '<span class="block text-lg uppercase tracking-wider text-white hover:text-gray-300">',
            'link_after' => '</span>',
            'fallback_cb' => false,
        ]);
        ?>
    </div>
</nav>