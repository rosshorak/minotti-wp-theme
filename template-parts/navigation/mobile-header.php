<?php
/**
 * Mobile Header Template Part with Icon 3 Hamburger
 *
 * @package TailPress
 */
?>

<div class="lg:hidden flex items-center justify-between">
    <!-- Mobile Logo -->
    <div class="flex-1">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Minotti-Logo.png" alt="Logo" class="w-[160px]">
            <div class="uppercase text-[11px] font-semibold mt-1 opacity-80">Cape Town | Johannesburg</div>
        </a>
    </div>

    <!-- Icon 3 Hamburger Menu Toggle -->
    <button id="primary-menu-toggle" class="hamburger-icon3" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
</div>