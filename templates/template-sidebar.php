<?php

/* Template Name: Sidebar template */

get_header(); ?>
   <div class="title_container" style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .2)), url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <h1 class = "title">
            <?php echo get_the_title(); ?>
        </h1>
    </div>

    <?php if (has_excerpt()): ?>
        <div class="thumbnail-excerpt">
            <?php echo get_the_excerpt(); ?>
        </div>

        <div class = "container">
            <div class = "content">
                <?php endif; ?>
                    <?php
                    echo get_the_content();
                ?>
            </div>

        <div class= "sidebar">
            <div class = "wrapper">
                <?php
                if (is_active_sidebar('main_sidebar')) :
                    dynamic_sidebar('main_sidebar');
                endif;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>