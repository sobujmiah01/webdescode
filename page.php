<?php get_header(); ?>

<main class="main_article_post">
    <article class="web_post_wrapper">
        <div class="web_post_inner pageWp">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <section class="post_wrapper itpage">
                        <header class="post_header">
                            <h1 class="post_title"><?php echo esc_html(apply_filters('webdescode_page_title', get_the_title())); ?></h1>
                        </header>
                        <div class="post_content">
                            <?php the_content(); ?>
                            <?php wp_link_pages(array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'webdescode'),
                                'after'  => '</div>',
                            )); ?>
                        </div>
                    </section>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <section class="no_posts_found">
                    <p><?php esc_html_e('This page has no content yet. Please check back later.', 'webdescode'); ?></p>
                </section>
            <?php endif; ?>
        </div>
    </article>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>