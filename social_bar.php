<ul>
    <?php
    $social_icons = array(
        'facebook' => 'fa-facebook-f',
        'twitter' => 'fa-x-twitter',
        'instagram' => 'fa-instagram',
        'youtube' => 'fa-youtube',
        'linkdin' => 'fa-linkedin-in',
        'github' => 'fa-github',
    );

    foreach ($social_icons as $network => $icon) {
        $url = get_theme_mod('social_' . $network);
        if ($url) {
            echo '<li><a href="' . esc_url($url) . '" target="_blank"><i class="fa-brands ' . $icon . '"></i></a></li>';
        }
    }
    ?>
</ul>