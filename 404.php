<?php get_header('simple'); ?>
    <h1>
        <?php echo get_the_title(); ?>
    </hi>

    <p>404 Page</p>

    <?php wp_nav_menu([
        'theme_location' => '404-menu'
    ]); ?> 
<?php get_footer(); ?>