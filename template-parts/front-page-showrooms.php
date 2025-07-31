<?php
/*
 * Template part for displaying showrooms section
 */
$cape_town_page_id = 19;
$johannesburg_page_id = 21;
$cape_town_hero_banner_image = get_field('hero_banner_image', $cape_town_page_id);
$johannesburg_hero_banner_image = get_field('hero_banner_image', $johannesburg_page_id);

?>
<div id="showrooms" class="pt-24 mx-auto px-4 max-w-screen-2xl">
    <div class="minotti-section-header text-center">Showrooms</div>
    <div class="mb-14 text-center">
        <a href="<?php echo get_permalink($cape_town_page_id); ?>" class="hover:font-medium uppercase text-sm tracking-wider">Cape Town</a>
        <span class="inline-block w-[25px] h-[1px] bg-black mx-4 mb-1"></span>
        <a href="<?php echo get_permalink($johannesburg_page_id); ?>" class="hover:font-medium uppercase text-sm tracking-wider">Johannesburg</a>
    </div>


    <div class="flex flex-col md:flex-row gap-8 mb-16">
        <!-- Left (1/3) -->
        <div class="md:w-1/3 pt-12">
            <div class="uppercase font-medium mb-6">Cape Town Showroom</div>
            <div class="mb-5">
                <p>Discover Minotti's Italian craftsmanship in the heart of Cape Town's V&A Waterfront. Our flagship showroom showcases the complete collection of contemporary furniture, from iconic seating to bespoke interior solutions, all designed to elevate your living spaces.</p>
            </div>
            <div>
                <p><a href="<?php echo get_permalink($cape_town_page_id); ?>" class="hover:font-medium">View showroom →</a></p>
            </div>
        </div>

        <!-- Right (2/3) -->
        <div class="md:w-2/3">
            <img src="<?= $cape_town_hero_banner_image['url'] ?>" alt="<?= $cape_town_hero_banner_image['alt'] ?>" class="w-full">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-8 mb-16">
        <!-- Image Left (2/3) -->
        <div class="md:w-2/3">
            <img src="<?= $johannesburg_hero_banner_image['url'] ?>" alt="<?= $johannesburg_hero_banner_image['alt'] ?>" class="w-full">
        </div>

        <!-- Text Right (1/3) -->
        <div class="md:w-1/3 pt-12">
            <div class="uppercase font-medium mb-6">Johannesburg Showroom</div>
            <div class="mb-5">
                <p>Experience luxury Italian design in Johannesburg's premier furniture destination. Our curated showroom features Minotti's latest collections alongside timeless classics, offering personalized design consultations to bring sophisticated Italian style to your home.</p>
            </div>
            <div>
                <p><a href="<?php echo get_permalink($johannesburg_page_id); ?>" class="hover:font-medium">View showroom →</a></p>
            </div>
        </div>
    </div>

</div>