<?php
/**
 * Plugin Name: WP Guten Call To Action
 * Description: This is a gutenberg call to action plugin
*/

if( ! defined( 'ABSPATH' ) ) : exit(); endif;

/**
 * Register Gutenberg Script
 */

add_action( 'enqueue_block_editor_assets', function () {
    wp_enqueue_script(
      'wp-guten-call-to-action-editor-script',
      plugins_url( 'build/index.js', __FILE__ ),
      [
          'wp-plugins',
          'wp-blocks',
          'wp-editor',
          'wp-edit-post',
          'wp-i18n',
          'wp-element',
          'wp-components',
          'wp-data'
      ]
    );
} );

/**
 * Enqueue Styles
 */

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'wp-guten-call-to-action-block-style', plugins_url( 'assets/css/style.css', __FILE__ ), [], false, 'all' );
} );

add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 'wp-guten-call-to-action-block-editor-style', plugins_url( 'assets/css/editor.css', __FILE__ ), [], false, 'all' );
} );


/**
 * Register A Block
 */

add_action( 'init', function () {
    register_block_type(
        'wp-guten-call-to-action-block/call-to-action',
        [
            'style' => 'wp-guten-call-to-action-block-style',
            'editor_style' => 'wp-guten-call-to-action-block-editor-style',
            'editor_scripts' => 'wp-guten-call-to-action-editor-script',
        ]
    );
} );