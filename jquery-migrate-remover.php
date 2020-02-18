<?php
/**
 * Plugin Name: Disable jQuery Migrate
 * Plugin URI: https://bidwellwebsites.com/
 * Description: Disables jQuery Migrate
 * Version: 1.0
 * Author: Mason Wiley
 * Author URI: https://bidwellwebsites.com/
 */

function mw_disable_jquery_migrate($scripts) {
  if ( !is_admin() && !empty( $scripts->registered['jquery']) ) {
    $scripts->registered['jquery']->deps = array_diff(
      $scripts->registered['jquery']->deps,
      [ 'jquery-migrate' ]
    );
  }
}

add_action('wp_default_scripts', 'mw_disable_jquery_migrate');
