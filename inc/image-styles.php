<?php
/**
 * Image-related customizations
 * 
 * @package WebDesCode
 */

/**
 * Register image-specific customizer settings
 */
function webdescode_image_customize_register($wp_customize) {
    // Image Styles Section
    $wp_customize->add_section('webdescode_image_styles', array(
        'title'    => __('Image Styles', 'webdescode'),
        'priority' => 30,
    ));

    // Image Style Setting
    $wp_customize->add_setting('image_style', array(
        'default'           => 'rounded',
        'transport'         => 'refresh',
        'sanitize_callback' => 'webdescode_sanitize_image_style'
    ));

    // Image Style Control
    $wp_customize->add_control('image_style', array(
        'label'   => __('Default Image Style', 'webdescode'),
        'section' => 'webdescode_image_styles',
        'type'    => 'select',
        'choices' => array(
            'rounded'   => __('Rounded Corners', 'webdescode'),
            'shadow'    => __('Drop Shadow', 'webdescode'),
            'circle'    => __('Circle', 'webdescode'),
            'bordered'  => __('Bordered', 'webdescode'),
            'zoom'      => __('Zoom Effect', 'webdescode'),
            'grayscale' => __('Grayscale', 'webdescode'),
            'polaroid'  => __('Polaroid Frame', 'webdescode'),
        ),
    ));
}
add_action('customize_register', 'webdescode_image_customize_register');

/**
 * Sanitize image style selection
 */
function webdescode_sanitize_image_style($input) {
    $valid = array('rounded', 'shadow', 'circle', 'bordered', 'zoom', 'grayscale', 'polaroid');
    return in_array($input, $valid, true) ? $input : 'rounded';
}

/**
 * Register custom image block styles for Gutenberg
 */
function webdescode_register_image_block_styles() {
    register_block_style('core/image', array(
        'name'  => 'rounded',
        'label' => __('Rounded Corners', 'webdescode'),
    ));
    
    register_block_style('core/image', array(
        'name'  => 'shadow',
        'label' => __('Drop Shadow', 'webdescode'),
    ));

    register_block_style('core/image', array(
        'name'  => 'circle',
        'label' => __('Circle', 'webdescode'),
    ));

    register_block_style('core/image', array(
        'name'  => 'bordered',
        'label' => __('Bordered', 'webdescode'),
    ));

    register_block_style('core/image', array(
        'name'  => 'zoom',
        'label' => __('Zoom Effect', 'webdescode'),
    ));

    register_block_style('core/image', array(
        'name'  => 'grayscale',
        'label' => __('Grayscale', 'webdescode'),
    ));

    register_block_style('core/image', array(
        'name'  => 'polaroid',
        'label' => __('Polaroid Frame', 'webdescode'),
    ));
}
add_action('init', 'webdescode_register_image_block_styles');

/**
 * Enqueue image styles
 */
function webdescode_enqueue_image_styles() {
    $selected_style = get_theme_mod('image_style', 'rounded');
    
    wp_register_style('webdescode-image-styles', false);
    wp_enqueue_style('webdescode-image-styles');
    
    $css = "
        /* Default Image Style */
        .wp-block-image:not([class*='is-style-']) img,
        .default-image-style img {
            " . webdescode_get_image_style_css($selected_style) . "
        }
        
        /* Block Editor Styles */
        .is-style-rounded img {
            border-radius: 8px;
        }
        .is-style-shadow img {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .is-style-circle img {
            border-radius: 50%;
        }
        .is-style-bordered img {
            border: 3px solid #eee;
        }
        .is-style-zoom img {
            transition: transform 0.3s ease;
        }
        .is-style-zoom img:hover {
            transform: scale(1.05);
        }
        .is-style-grayscale img {
            filter: grayscale(100%);
        }
        .is-style-polaroid img {
            background: white;
            padding: 0.5rem 0.5rem 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    ";
    
    wp_add_inline_style('webdescode-image-styles', $css);
}
add_action('wp_enqueue_scripts', 'webdescode_enqueue_image_styles');
add_action('enqueue_block_editor_assets', 'webdescode_enqueue_image_styles');

/**
 * Helper function to get CSS for each image style
 */
function webdescode_get_image_style_css($style) {
    switch ($style) {
        case 'rounded':   return 'border-radius: 8px;';
        case 'shadow':   return 'box-shadow: 0 4px 8px rgba(0,0,0,0.1);';
        case 'circle':   return 'border-radius: 50%;';
        case 'bordered': return 'border: 3px solid #eee;';
        case 'zoom':     return 'transition: transform 0.3s ease;';
        case 'grayscale': return 'filter: grayscale(100%);';
        case 'polaroid': return 'background: white; padding: 0.5rem 0.5rem 1.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1);';
        default:         return '';
    }
}