<?php
/**
 * Mobile Header Template Part
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

    <!-- Mobile Menu Toggle -->
    <button id="primary-menu-toggle" class="flex flex-col items-center justify-center w-8 h-8 space-y-1 focus:outline-none cursor-pointer" aria-label="Toggle menu">
        <span class="block w-6 h-0.5 bg-white transition-transform duration-300"></span>
        <span class="block w-6 h-0.5 bg-white transition-opacity duration-300"></span>
        <span class="block w-6 h-0.5 bg-white transition-transform duration-300"></span>
    </button>
</div>