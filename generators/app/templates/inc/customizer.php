<?php

function <%= themeKey %>_customize_register( $wp_customize ) {
  $wp_customize->add_section( '<%= themeKey %>_social_section', array(
    'title'    => __( 'Social', '<%= themeKey %>' ),
    'priority' => 40,
  ));

  $wp_customize->add_setting( '<%= themeKey %>_instagram', array('sanitize_callback' => 'esc_url_raw', 'default' => ''));
  $wp_customize->add_control( '<%= themeKey %>_instagram', array(
    'label'    => __( 'Instagram link', '<%= themeKey %>' ),
    'section'  => '<%= themeKey %>_social_section',
    'settings' => '<%= themeKey %>_instagram',
    'priority' => 2,
  ));

  $wp_customize->add_setting( '<%= themeKey %>_facebook', array('sanitize_callback' => 'esc_url_raw', 'default' => ''));
  $wp_customize->add_control( '<%= themeKey %>_facebook', array(
    'label'    => __( 'Facebook link', '<%= themeKey %>' ),
    'section'  => '<%= themeKey %>_social_section',
    'settings' => '<%= themeKey %>_facebook',
    'priority' => 4,
  ));

  $wp_customize->add_setting( '<%= themeKey %>_twitter', array('sanitize_callback' => 'esc_url_raw', 'default' => ''));
  $wp_customize->add_control( '<%= themeKey %>_twitter', array(
    'label'    => __( 'Twitter link', '<%= themeKey %>' ),
    'section'  => '<%= themeKey %>_social_section',
    'settings' => '<%= themeKey %>_twitter',
    'priority' => 6,
  ));

  $wp_customize->add_setting( '<%= themeKey %>_linkedin', array('sanitize_callback' => 'esc_url_raw', 'default' => ''));
  $wp_customize->add_control( '<%= themeKey %>_linkedin', array(
    'label'    => __( 'LinkedIn link', '<%= themeKey %>' ),
    'section'  => '<%= themeKey %>_social_section',
    'settings' => '<%= themeKey %>_linkedin',
    'priority' => 8,
  ));
}
add_action( 'customize_register', '<%= themeKey %>_customize_register' );