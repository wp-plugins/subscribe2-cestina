<?php
/*
Plugin Name: Subscribe2 čeština
Plugin URI: http://expres-web.cz
Description: Přeloží plugin subscribe2 do češtiny.
Version: 1.4
Author: Expres-Web.cz
Author URI: http://expres-web.cz
Text Domain: sb2

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the subscribe2 čeština.
 *
 * @since 1.0
 */
function sb2_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/subscribe2-cestina/jazyky/' . apply_filters( 'subscribe2_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'subscribe2', $mofile );
}
add_action( 'wp_loaded', 'sb2_load_textdomain' );
