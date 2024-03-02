<?php
/**
 * Single Post Template
 *
 * The single.php template file is responsible for displaying the content of a single post in a WordPress theme.
 * This file is called when a viewer clicks on a post's title or permalink, leading them to the individual post page.
 *
 * If single.php does not exist in your theme, WordPress will use index.php as a fallback to display the single post.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header(); ?>
<?php get_template_part('components/heros/hero-split'); ?>
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>