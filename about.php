<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="about-page">
    <?php get_template_part('components/about-hero-section'); ?>
    <?php get_template_part('components/about-content-section'); ?>
    <?php get_template_part('components/goals-section'); ?>
    <?php get_template_part('components/advisers-section'); ?>
    <?php get_template_part('components/about-supporters-section'); ?>
    <?php get_template_part('components/about-media-section'); ?>
    <?php get_template_part('components/about-faq-section'); ?>
</main>

<?php get_footer(); ?>
