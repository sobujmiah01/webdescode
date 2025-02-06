<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <article class="post_wrapper" id="post-<?php the_ID(); ?>">
            <figure>
                <a href="<?php the_permalink(); ?>"><?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail', array('alt' => esc_attr(get_the_title())));
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
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php echo esc_html__('Nothing, Post here', 'webdescode'); ?></p>
<?php endif; ?>