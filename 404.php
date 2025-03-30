<?php get_header(); ?>

<div class="error-404">
    <div class="error-content">
        <h1><?php esc_html_e('Oops! Page not found.', 'webdescode'); ?></h1>
        <p><?php esc_html_e("We're sorry, but the page you're looking for might have been removed or doesn't exist.", 'webdescode'); ?></p>
        <p><?php esc_html_e("Let's get you back on track:", 'webdescode'); ?></p>
        
        <!-- Use WordPress search form function -->
        <?php get_search_form(); ?>

        <!-- Call to Action Links -->
        <p>
            <?php esc_html_e('You can also navigate back to the', 'webdescode'); ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php esc_html_e('homepage', 'webdescode'); ?>
            </a> 
            <?php esc_html_e('or check out these popular pages:', 'webdescode'); ?>
        </p>
        
        <!-- Suggested Links -->
        <div class="suggested-links">
            <?php
            // Default pages to suggest
            $suggested_pages = array(
                'blog' => __('Blog', 'webdescode'),
                'about' => __('About Us', 'webdescode'),
                'contact' => __('Contact', 'webdescode'),
                'services' => __('Services', 'webdescode')
            );
            
            // Check if WooCommerce is active
            if (class_exists('WooCommerce')) {
                $suggested_pages['shop'] = __('Shop', 'webdescode');
            }
            
            foreach ($suggested_pages as $slug => $title) {
                $page_url = get_permalink(get_page_by_path($slug));
                if ($page_url) {
                    echo '<a href="' . esc_url($page_url) . '">' . esc_html($title) . '</a>';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>