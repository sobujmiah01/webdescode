<div class="post-meta">
    <!-- Post Author -->
    <span class="post-author">
        <i class="fas fa-user"></i>
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author">
            <?php the_author(); ?>
        </a>
    </span>

    <!-- Post Time -->
    <span class="post-time">
        <i class="fas fa-calendar-alt"></i>
        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
            <?php echo esc_html(get_the_date()); ?>
        </time>
    </span>

    <!-- Post Category -->
    <span class="post-category" aria-label="<?php esc_attr_e('Post categories', 'webdescode'); ?>">
        <i class="fas fa-folder"></i>
        <?php the_category(', '); ?>
    </span>

    <!-- Post Tags -->
    <?php if (has_tag()): ?>
        <span class="post-tags">
            <i class="fas fa-tags"></i>
            <?php the_tags('', ', ', ''); ?>
        </span>
    <?php endif; ?>
</div>
