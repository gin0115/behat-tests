<?php

/**
 * @wordpress-plugin
 * Plugin Name:     WP-Hat testbed
 * Plugin URI:      https://www.pinkcrab.co.uk
 * Description:     WordPress + BeHat testbed
 * Version:         0.1.0
 * Author:          Glynn Quelch
 * Author URI:      https://www.pinkcrab.co.uk
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     pc_bp
 */

add_filter('the_content', function ($e) {
    var_dump(getcwd());
    return 'BEHAT';
}, 99999999999);
