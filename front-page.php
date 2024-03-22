<!-- Front Page -->
<?php get_header(); ?>
<div class = "content">
    <div class="hero-container">
        <div class = "front_title">
            <h1 class ="front-title"> <?php echo get_the_title(); ?> </h1>
            <p class ="front-excerpt"><?php echo get_the_excerpt();?></p>
        </div>

        <div class = "hero-image">
            <?php
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail();
            }
            ?> 
        </div>
    </div>
</div>
    <div class = "featured_content">
        <h1 class = "feat_header">Featured Work<h1>
        <?php
            $query = new WP_Query([
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
            ]);

            if ($query->have_posts()):
                while ($query->have_posts()) : $query->the_post();
                    get_template_part('components/card-overlay');
                endwhile;
                wp_reset_postdata();
            endif;        
        ?>        
    </div>
<?php get_footer(); ?>