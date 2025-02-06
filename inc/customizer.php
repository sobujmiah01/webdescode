<?php
function webdescode_customize_register($wp_customize) {
    $wp_customize->add_section('webdescode_image_styles', array(
        'title'    => __('Image Styles', 'webdescode'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('image_style', array(
        'default' => 'rounded',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('image_style', array(
        'label'   => __('Select Image Style', 'webdescode'),
        'section' => 'webdescode_image_styles',
        'type'    => 'select',
        'choices' => array(
            'rounded'  => 'Rounded',
            'shadow'   => 'Shadow',
            'circle'   => 'Circle',
            'bordered' => 'Bordered',
            'zoom'     => 'Zoom',
            'grayscale'=> 'Grayscale',
            'polaroid' => 'Polaroid',
        ),
    ));
}

add_action('customize_register', 'webdescode_customize_register');
?>
