<?php
/**
 * Mobile Navigation Template Part
 *
 * @package TailPress
 */
?>

<nav id="primary-navigation" class="lg:hidden mt-6 hidden">
    <div class="border-t border-gray-600 pt-6">
        <!-- Products Section for Mobile -->
        <div class="products-mobile">
            <div class="mb-3">
                <a href="https://www.minotti.com/en/products" target="_blank"
                    class="text-lg font-semibold tracking-wider text-white hover:text-gray-300">
                    Products
                </a>
            </div>
            <div class="ml-4 space-y-2">
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
            'menu_class' => 'space-y-4',
            'link_before' => '<span class="block text-lg font-semibold tracking-wider text-white hover:text-gray-300">',
            'link_after' => '</span>',
            'fallback_cb' => false,
        ]);
        ?>
    </div>
</nav>