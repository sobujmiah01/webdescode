<?php get_header(); ?>

<main class="main_article_post">
    <article class="web_post_wrapper">
        <div class="web_post_inner">
            <!-- Archive Title -->
            <header class="archive-header">
                <h1 class="archive-title"><?php the_archive_title(); ?></h1>
                <p class="archive-description"><?php the_archive_description(); ?></p>
            </header>

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <article class="post_wrapper" id="post-<?php the_ID(); ?>">
                        <figure>
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                if (has_post_thumbnail()) {
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                    if (!$thumb_alt) {
                                        $thumb_alt = get_the_title();
                                    }
                                    the_post_thumbnail('thumbnail', array('alt' => esc_attr($thumb_alt)));
                                }
                                ?>
                            </a>
                        </figure>
                        <div class="article_content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php get_template_part('post_meta'); ?>
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php esc_html_e('No posts found.', 'webdescode'); ?></p>
            <?php endif; ?> 
        </div>
        <div class="pagination_section">
            <?php custom_pagination(); ?>
        </div>
    </article>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>