<?php
/* Template Name: Listing template */

get_header(); ?>
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
                $query = new WP_Query([
                'post_type' => 'portfolio',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'paged' => $paged,
                'order' => 'DESC'
                ]);

                if ($query->have_posts()):
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('components/card-overlay');
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        <div class ="pagination">
            <?php
          echo paginate_links([
              'total' => $query->max_num_pages,
              'prev_text' => __('Prev'),
              'next_text' => __('Next'),
          ]);
          ?>
        </div>
    </div>
<?php get_footer(); ?>