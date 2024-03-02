<footer class="footer">
    <p class="copyright">
        Copyright &copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?> &nbsp;
    </p>
    <?php wp_nav_menu([
        'theme_location' => 'footer'
    ]); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>