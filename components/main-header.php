<header class="header-bg">
    <div class="header-container"> <!-- Flex container for logo and nav menu -->
        <div class="logo-container"> <!-- Adjusted width to w-auto -->
            <a href="<?php echo home_url(); ?>"> <!-- Anchor tag linking to the homepage -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerLogo.svg" alt="Logo" class="logo">
            </a>
        </div>
    
        <!-- Hamburger Icon -->
        <!-- <div class="hamburger-icon">
            <button id="hamburger" class="hamburger-button">
                <svg class="hamburger-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div> -->
    
        <div class="nav-menu-container"> <!-- Container for the nav menu -->
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu', // This applies flex layout to the <ul> element
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_before' => '<span class="nav-link">', // Optionally wrap the link text for additional styling
                'link_after' => '</span>',
                'fallback_cb' => false
            ]); ?>
        </div>
    </div>
    </div>

   

</header>