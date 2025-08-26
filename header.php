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
            <?php get_template_part('template-parts/navigation/mobile-header'); ?>

            <!-- Desktop Navigation -->
            <?php get_template_part('template-parts/navigation/desktop-nav'); ?>

            <!-- Mobile Navigation Menu -->
            <?php get_template_part('template-parts/navigation/mobile-nav'); ?>

        </div>
    </header>

    <div id="content" class="site-content grow">
        <?php do_action('tailpress_content_start'); ?>
        <main>