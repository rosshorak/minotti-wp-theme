<?php
/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
        </main>

        <?php do_action('tailpress_content_end'); ?>
    </div>

    <?php do_action('tailpress_content_after'); ?>

<div id="instagram-cont" class="bg-[#1e1e1e]">
    <div class="container mx-auto px-4 max-w-screen-2xl pb-10 pt-14">
        <div class="mb-1.5">
            <a class="text-white text-lg hover:text-gray-400 transition" href="https://www.instagram.com/minotti_southafrica/" target="_blank">
                Follow <span class="font-medium">Minotti_SouthAfrica</span> on Instagram
            </a>
        </div>
        <div>
            <?= do_shortcode("[instagram-feed feed='1']"); ?>
        </div>
    </div>
</div>

<footer class="bg-[#1e1e1e] text-white pt-16 pb-12 text-sm">
    <div class="container mx-auto px-4 max-w-screen-2xl">

        <div class="flex flex-col md:flex-row md:justify-between gap-12">

            <!-- Newsletter -->
            <div class="md:w-2/3 space-y-6 pr-12">
                <div class="text-white text-2xl tracking-wider">
                    Subscribe to keep updated
                </div>
                <div id="newsletter-footer-cont">
                    <?= do_shortcode("[wpforms id='60' title='false']") ?>
                </div>
            </div>

            <!-- Social & Legal Links -->
            <div class="md:w-1/3 space-y-8">
                <div class="flex gap-4 flex-wrap">
                    <a href="https://www.facebook.com/limelinecapetown/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/facebook.svg" alt="Facebook" class="h-6"></a>
                    <a href="https://www.instagram.com/minotti_southafrica/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="Instagram" class="h-6"></a>
                </div>

                <!-- Footer Links -->
                <ul class="space-y-2.5 tracking-wider text-[13px]">
                    <li><a href="/privacy-policy" class="hover:text-gray-400 transition">Privacy policy</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="leading-relaxed tracking-wider text-[13px] mt-8">
            © Minotti <?= date('Y'); ?>. All Rights Reserved.<br>
            Waterway House - North, 3 Dock Road<br>
            V&A Waterfront, Cape Town, 8001
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
