<ul class="social-links">
    <?php
    $social_icons = array(
        'facebook'  => 'fa-facebook',
        'twitter'   => 'fa-twitter',
        'instagram' => 'fa-instagram',
        'youtube'   => 'fa-youtube',
        'linkedin'  => 'fa-linkedin-in',
        'github'    => 'fa-github',
    );

    foreach ($social_icons as $network => $icon) {
        $url = get_theme_mod('social_' . $network);
        if ($url) {
            echo '<li><a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer nofollow" aria-label="' . esc_attr(ucfirst($network)) . '">';
            echo '<i class="fa-brands ' . esc_attr($icon) . '"></i>';
            echo '</a></li>';
        }
    }
    ?>
</ul>
