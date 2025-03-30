<footer class="footer_wrap">
    <div class="footer_inner">
        <section class="footer_top_wrap">
            <?php dynamic_sidebar('footer_top'); ?>
        </section>
        <div class="web_credit">
            <p>
                <a class="footer_credit" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a> 
                <?php esc_html_e('All Rights Reserved &copy;', 'webdescode'); ?> <?php echo date('Y'); ?>
            </p>
            <div class="footer_menu">
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_menu',
                            'container'      => 'ul',
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>