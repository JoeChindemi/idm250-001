<?php
/**
 * Page Template
 *
 * The page.php template is used to display individual pages. This template is called when a single page's content is queried.
 * It allows for customization of how page content is displayed, separate from posts or custom post types.
 *
 * If specific page templates (like front-page.php, or a custom template) are not found, WordPress will use page.php as a fallback.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 */
get_header(); ?>
<h1>
  <?php echo get_the_title(); ?>
</h1>
<p>This is a page.php template</p>
<?php get_footer(); ?>