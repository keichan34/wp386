<?php
/**
 * wp386 Color Theme Support
 *
 * @package wp386
 */

function wp386_color_theme_classes( $classes ) {
  $options = wp386_blog_options();
  $classes[] = 'theme-' . $options['color_combination'];
  return $classes;
}

add_filter( 'body_class', 'wp386_color_theme_classes' );
