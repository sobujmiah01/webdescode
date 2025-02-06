<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php 
        if (is_single() || is_page()) { 
            echo esc_attr(wp_strip_all_tags(get_the_excerpt() ?: get_bloginfo('description'))); 
        } else { 
            echo esc_attr(get_bloginfo('description')); 
        } 
    ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="web_header">
        <div class="header_wrapper header-content">
            <div class="header_top">
                <nav>
                    <?php 
                    if (has_nav_menu('header_menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'container'      => 'nav',
                            'container_class'=> 'header-navigation',
                            'aria-label'     => esc_attr__('Header Menu', 'webdescode'),
                        ));
                    }
                    ?>
                </nav>
                <div class="social_icon">
                    <?php get_template_part('social_bar'); ?>
                </div>
            </div>
            <div class="Header_main_menu">
                <div class="menu_wrapper">
                    <div class="logo_menu_wrapper">
                        <a class="web_logoL" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php 
                            $custom_logo_id = get_theme_mod('custom_logo'); 
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            ?>
                        </a>
                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'main_menu',
                            'container'       => 'nav',
                            'container_class' => 'main_navigation',
                        ));
                        ?>
                    </div>
                    <div class="search_and_rs">
                        <?php get_search_form(); ?>
                        <button class="menu-toggle" aria-expanded="false">
                            <span class="screen-reader-text"><?php esc_html_e('Toggle Menu', 'webdescode'); ?></span>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="breadcrumbs">
        <?php if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        } ?>
    </div>
