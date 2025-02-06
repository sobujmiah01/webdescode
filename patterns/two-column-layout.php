<?php
/**
 * Register custom block patterns for WebDesCode theme.
 *
 * @since WebDesCode 1.8
 */

if ( ! function_exists( 'webdescode_register_block_patterns' ) ) :
    function webdescode_register_block_patterns() {
        // Load theme image dynamically
        $theme_img_url = get_template_directory_uri() . '/assets/images/sample-image.jpg';

        // Registering a simple two-column layout pattern.
        register_block_pattern(
            'webdescode/two-column-layout',
            array(
                'title'       => esc_html__( 'Two Column Layout', 'webdescode' ),
                'description' => esc_html__( 'A simple two-column layout with text and image.', 'webdescode' ),
                'categories'  => array( 'webdescode-layouts' ),
                'content'     => '<!-- wp:columns -->
                                 <div class="wp-block-columns">
                                   <div class="wp-block-column" style="flex-basis:50%">
                                       <!-- wp:paragraph -->
                                       <p>' . esc_html__( 'Your content goes here.', 'webdescode' ) . '</p>
                                       <!-- /wp:paragraph -->
                                   </div>
                                   <div class="wp-block-column" style="flex-basis:50%">
                                       <!-- wp:image -->
                                       <figure class="wp-block-image">
                                           <img src="' . esc_url( $theme_img_url ) . '" alt=""/>
                                       </figure>
                                       <!-- /wp:image -->
                                   </div>
                                 </div>
                                 <!-- /wp:columns -->',
            )
        );

        // Registering a "Call to Action" block pattern.
        register_block_pattern(
            'webdescode/call-to-action',
            array(
                'title'       => esc_html__( 'Call to Action', 'webdescode' ),
                'description' => esc_html__( 'A simple call-to-action section with a button.', 'webdescode' ),
                'categories'  => array( 'webdescode-layouts' ),
                'content'     => '<!-- wp:group -->
                                 <div class="wp-block-group">
                                   <p>' . esc_html__( 'Your call to action content here.', 'webdescode' ) . '</p>
                                   <!-- wp:button -->
                                   <div class="wp-block-button">
                                       <a class="wp-block-button__link" href="#">' . esc_html__( 'Click Here', 'webdescode' ) . '</a>
                                   </div>
                                   <!-- /wp:button -->
                                 </div>
                                 <!-- /wp:group -->',
            )
        );
    }
endif;

add_action( 'init', 'webdescode_register_block_patterns' );
