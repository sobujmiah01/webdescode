<?php
function webdescode_add_custom_image_block_styles() {
    // Register new image styles for Gutenberg
    register_block_style(
        'core/image', // The block type (image block in this case)
        array(
            'name'  => 'rounded',
            'label' => __('Rounded', 'webdescode'),
        )
    );
    
    register_block_style(
        'core/image',
        array(
            'name'  => 'shadow',
            'label' => __('Shadow', 'webdescode'),
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'  => 'circle',
            'label' => __('Circle', 'webdescode'),
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'  => 'bordered',
            'label' => __('Bordered', 'webdescode'),
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'  => 'zoom',
            'label' => __('Zoom', 'webdescode'),
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'  => 'grayscale',
            'label' => __('Grayscale', 'webdescode'),
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'  => 'polaroid',
            'label' => __('Polaroid', 'webdescode'),
        )
    );
}
add_action('init', 'webdescode_add_custom_image_block_styles');