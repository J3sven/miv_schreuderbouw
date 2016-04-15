<?php

function miv_theme_customizer( $wp_customize ) {

// Logo 1

//Add logo section
$wp_customize->add_section( 'miv_logo_section' , array(
    'title'       => __( 'Logo', 'miv' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header'
) );

//Register logo setting
$wp_customize->add_setting( 'miv_logo' );

//Allow for uploads
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'miv_logo', array(
    'label'    => __( 'Logo', 'miv' ),
    'section'  => 'miv_logo_section',
    'settings' => 'miv_logo'
) ) );

// Logo 2

//Add logo section
$wp_customize->add_section( 'miv_logo2_section' , array(
    'title'       => __( 'Logo2', 'miv2' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

//Register logo setting
$wp_customize->add_setting( 'miv_logo2' );

//Allow for uploads
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'miv_logo2', array(
    'label'    => __( 'Logo2', 'miv' ),
    'section'  => 'miv_logo2_section',
    'settings' => 'miv_logo2'
) ) );

$wp_customize->add_section( 'background_image', array(
    'title'          => __( 'Background Image' ),
    'theme_supports' => 'custom-background',
    'priority'       => 80,
 ) );

$wp_customize->add_setting( new WP_Customize_Background_Image_Setting( $wp_customize, 'background_image_thumb', array(
    'theme_supports' => 'custom-background',
) ) );

$wp_customize->add_control( new WP_Customize_Background_Image_Control( $wp_customize ) );

$wp_customize->add_setting( 'background_repeat', array(
    'default'        => 'repeat',
    'theme_supports' => 'custom-background',
) );

$wp_customize->add_control( 'background_repeat', array(
    'label'      => __( 'Background Repeat' ),
    'section'    => 'background_image',
    'type'       => 'radio',
    'choices'    => array(
        'no-repeat'  => __('No Repeat'),
        'repeat'     => __('Tile'),
        'repeat-x'   => __('Tile Horizontally'),
        'repeat-y'   => __('Tile Vertically'),
    ),
) );

        $wp_customize->add_setting( 'background_position_x', array(
            'default'        => 'left',
            'theme_supports' => 'custom-background',
        ) );

        $wp_customize->add_control( 'background_position_x', array(
            'label'      => __( 'Background Position' ),
            'section'    => 'background_image',
            'type'       => 'radio',
            'choices'    => array(
                'left'       => __('Left'),
                'center'     => __('Center'),
                'right'      => __('Right'),
            ),
        ) );

        $wp_customize->add_setting( 'background_attachment', array(
            'default'        => 'fixed',
            'theme_supports' => 'custom-background',
        ) );

        $wp_customize->add_control( 'background_attachment', array(
            'label'      => __( 'Background Attachment' ),
            'section'    => 'background_image',
            'type'       => 'radio',
            'choices'    => array(
                'fixed'      => __('Fixed'),
                'scroll'     => __('Scroll'),
            ),
        ) );
}
add_action( 'customize_register', 'miv_theme_customizer' );
$args = array(

    'uploads' => true

);

add_theme_support( 'custom-background', $args );