<!-- Archive Page -->
<?php get_header(); ?>
<?php
echo '<h2>' . single_cat_title('', false) . '</h2>';
echo category_description();

// Define custom query parameters
$portfolio_args = array(
    'post_type' => 'portfolio', // Your custom post type
    'category_name' => single_cat_title('', false), // Filter by current category title
    'posts_per_page' => -1 // Retrieve all posts
);

// Create a new WP_Query
$portfolio_query = new WP_Query($portfolio_args);

// Check if the custom query has posts
if ($portfolio_query->have_posts()):
    // Loop through the posts
    while ($portfolio_query->have_posts()): $portfolio_query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        echo '<a href="' . get_the_permalink() . '">Read More</a>';
        echo '<hr>';
    endwhile;
    // Restore original Post Data
    wp_reset_postdata();
else:
    echo '<p>No content found in Portfolio category</p>';
endif;
?>

<?php get_footer(); ?>
