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
            <div class="no-results">
                <p><?php esc_html_e('Sorry, no results found.', 'webdescode'); ?></p>
            </div>
        <?php endif; ?>
    </article>
    
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>