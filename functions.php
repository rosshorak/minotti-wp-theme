<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager
            ->add('primary', __('Primary Menu', 'tailpress')) // for mobile
            ->add('left_menu', __('Left Menu', 'tailpress'))
            ->add('right_menu', __('Right Menu', 'tailpress'))
        )
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();


/**
 * Add canonical tags for projects with original URLs
 */
add_action('wp_head', function() {
    if (is_singular('project')) {
        $original_url = get_field('original_url');
        if ($original_url) {
            // Remove WordPress's default canonical
            remove_action('wp_head', 'rel_canonical');

            // Add our custom canonical
            echo '<link rel="canonical" href="' . esc_url($original_url) . '">' . "\n";
        }
    }
}, 1); // Priority 1 to run early
