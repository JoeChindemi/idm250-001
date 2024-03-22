<!-- Build for card overlay used in listing and home page -->
<div class="custom-article" style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .2)), url('<?php echo get_the_post_thumbnail_url(); ?>');">
<a href="<?php the_permalink(); ?>">
  <div class="gradient-overlay"></div>
  <div class="ring-effect"></div>
  <div class="article-details">
  </div>
  <h3 class="article-title">
      <?php the_title(); ?>
    </a>
  </h3>
  </div>
