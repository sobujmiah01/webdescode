<?php get_header(); ?>

<main class="main_article_post">
    <article class="web_post_wrapper">
        <div class="web_post_inner">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('single_postWP'); ?>>
                        <h1><?php the_title(); ?></h1>
                         <?php get_template_part('post_meta'); ?>
                        <?php echo wpautop(get_the_content()); ?>

                        <!-- Pagination for multi-page content -->
                        <?php
                        wp_link_pages(array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'webdescode') . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        ));
                        ?>

                        <!-- Related Posts Section -->
                        <div class="related_post_wp">
                            <?php get_template_part('related_post_section'); ?>
                        </div>

                        <!-- Comments Section -->
                        <div class="comment_cstm">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php esc_html_e('Nothing, Post here', 'webdescode'); ?></p>
            <?php endif; ?>
        </div>
    </article>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>