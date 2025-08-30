<?php 
/**
 * Template Name: Person Detail Page
 * Description: Template for displaying individual person details
 */

get_header(); ?>

<main class="person-page">
    <?php get_template_part('components/person-section'); ?>
    <?php get_template_part('components/sta-section'); ?>
    <?php get_template_part('components/names-section'); ?>
</main>

<?php get_footer(); ?>
