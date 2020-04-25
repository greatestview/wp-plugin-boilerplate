<?php
/**
 * Plugin Name: Nice Plugin
 * Description: Nice Plugin Description
 * Version: 1.0
 * Author: Kim Meyer <kim@greatestview.de>
 * Author URI: https://greatestview.de
 * Text Domain: greatestview-nice-plugin
 */

namespace Greatestview\NicePlugin;

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die();
}

const ID = 'someId';

/**
 * Enqueue JavaScript.
 */
function enqueue_scripts()
{
    wp_enqueue_script('some-script', 'https://example.com/script.js');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts');

require_once dirname(__FILE__) . '/inc/more.php';
