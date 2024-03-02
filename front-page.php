<?php get_header(); ?>
    <h1 class = "">
        <?php echo get_the_title(); ?>
    </hi>

    <?php
    if (has_post_thumbnail()) {
        echo get_the_post_thumbnail();
    }

    echo get_the_excerpt();
    ?>

    <p>This is a front-page.php template</p>

    <div class = "content">
        <?php
        echo get_the_content();
        ?>
    </div<
<?php get_footer(); ?>