<?php
/**
 * 404 Template
 *
 * The 404 template is used when WordPress cannot find a post, page, or other content that matches the query.
 * This template file is an opportunity to provide useful information to users who encounter a "Page Not Found" error.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 */
get_header('simple'); ?>

<div class="page-wrapper">
  <div class="content-container">
    <div class="error-message-container">
      <p class="error-code">404</p>
      <h1 class="error-title">This page does not exist</h1>
      <p class="error-description">Sorry, we couldn’t find the page you’re looking for.</p>
    </div>
    <div class="navigation-container">
      <h2 class="sr-only">Popular pages</h2>
      <?php wp_nav_menu([
          'theme_location' => '404-menu'
      ]); ?>
      <div class="back-to-home-container">
        <a href="#" class="back-to-home-link">
          <span aria-hidden="true">&larr;</span>
          Back to home
        </a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>