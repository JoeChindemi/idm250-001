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
  <!-- <p>This is a page.php template</p> -->
  <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .2)), url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <h1 class = "title">
            <?php echo get_the_title(); ?>
        </h1>
    </div>
    <div class = "content">
        <?php if (has_excerpt()): ?>
        <div class="thumbnail-excerpt">
            <?php echo get_the_excerpt(); ?>
        </div>

        <?php endif; ?>
            <?php
            echo get_the_content();
        ?>
    </div>
<?php get_footer(); ?>