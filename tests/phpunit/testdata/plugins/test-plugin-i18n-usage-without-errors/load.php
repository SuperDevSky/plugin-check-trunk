<?php
/**
 * Plugin Name: Test Plugin i18n usage without errors for Plugin Check
 * Plugin URI: https://github.com/wordpress/plugin-check
 * Description: Plugin Check plugin from the WordPress Performance Team, a collection of tests to help improve plugin performance.
 * Requires at least: 6.0
 * Requires PHP: 5.6
 * Version: n.e.x.t
 * Author: WordPress Performance Team
 * Author URI: https://make.wordpress.org/performance/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: test-plugin-check
 *
 * @package test-plugin-check
 */

/**
 * File contains no errors related to i18n translation issues.
 */
$city = 'Surat';

sprintf(
	/* translators: %s: Name of a city */
	__( 'Your city is %s.', 'test-plugin-check' ),
	$city
);

esc_html__( 'Hello World!', 'test-plugin-check' );
