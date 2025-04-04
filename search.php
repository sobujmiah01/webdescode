<?php get_header(); ?>

<main class="main_article_post">
    <article class="web_post_wrapper">
        <h2 class="search_heading" aria-label="<?php esc_attr_e('Search Results', 'webdescode'); ?>">
            <?php printf(esc_html__('Search Results for: %s', 'webdescode'), get_search_query()); ?>
        </h2>
        
        <?php if (have_posts()) : ?>
            <div class="web_post_inner">
                <?php get_template_part('loop_post'); ?>
            </div>
            <div class="pagination_section">
                <?php custom_pagination(); ?>
            </div>
        <?php else : ?>
            <div class="no-results-wrapper">
                <div class="no-results-content">
                    <svg class="no-results-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        <line x1="11" y1="8" x2="11" y2="14"></line>
                        <line x1="8" y1="11" x2="14" y2="11"></line>
                    </svg>
                    <h3 class="no-results-title"><?php esc_html_e('Oops! No Results Found', 'webdescode'); ?></h3>
                    <p class="no-results-message"><?php esc_html_e("We couldn't find what you're looking for. Try different keywords or browse our categories.", 'webdescode'); ?></p>
                    <div class="no-results-action">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="no-results-button">
                            <?php esc_html_e('Return Home', 'webdescode'); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </article>
    
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>