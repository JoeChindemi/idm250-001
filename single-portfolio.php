<?php
/**
 * Single Portfolio Template
 *
 * This template is used for displaying single portfolio items. It's specifically tailored for the 'portfolio' custom post type.
 * Customize it to showcase portfolio details and media in a unique layout, separate from standard posts or pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header(); ?>
    <div class = "title_container">
        <h1 class = "title">
            <?php echo get_the_title(); ?>
        </h1>
    </div>
    <div class = "content">
        <?php
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail();
            }
        ?> 

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