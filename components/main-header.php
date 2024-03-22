<header class="header-bg">
    <div class="header-container">
        <div class="logo-container">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerLogo.svg" alt="Logo" class="logo">
            </a>
        </div>
        <div class="nav-menu-container">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_before' => '<span class="nav-link">',
                'link_after' => '</span>',
                'fallback_cb' => false
            ]); ?>
        </div>
        <div class="hamburger-container">
                <?php
                    echo "<button class='hamburger'>";
                    echo "<div class='bar'></div>";
                    echo "</button>";
                ?>
        </div>  
        <nav class="mobile-nav">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'link_before' => '<span class="nav-link">',
                'link_after' => '</span>',
                'fallback_cb' => false
            ]); ?>
        </nav>
    </div>
</header>