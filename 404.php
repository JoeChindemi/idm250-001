<?php
/**
 * 404 Template
 *
 * The 404 template is used when WordPress cannot find a post, page, or other content that matches the query.
 * This template file is an opportunity to provide useful information to users who encounter a "Page Not Found" error.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 */
get_header('simple'); ?> <!-- No header -->

<div class="page-wrapper">
  <div class="content-container">
    <div class="error-message-container">
      <p class="error-code">404!</p>
      <p class="error-description">Sorry, the page you are looking for does not exsist.</p>
    </div>
    
    <div class="navigation-container">
      <div class="back-to-home-container">
        <a href="<?php echo home_url(); ?>" class="back-to-home-link">Go Home</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>