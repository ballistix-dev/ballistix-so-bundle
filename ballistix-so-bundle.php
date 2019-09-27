<?php
/**
* Plugin Name: Ballistix SiteOrigin Widget Bundle
* Description: A collection of all widgets created by Ballistix SPE.
* Plugin URI: https://ballistix.com
* Author: Ballistix
* Author URI: https://ballistix.com
* Version: 1.0
* License: GPL2
* Text Domain: Text Domain
* Domain Path: Domain Path
*/

/*
Copyright (C) 2019  Marcel Badua  bitterdash@gmail.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'plugins_loaded', array( 'BALLISTIX_SO_BUNDLE', 'get_instance' ) );
register_activation_hook( __FILE__, array( 'BALLISTIX_SO_BUNDLE', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'BALLISTIX_SO_BUNDLE', 'deactivate' ) );
register_uninstall_hook( __FILE__, array( 'BALLISTIX_SO_BUNDLE', 'uninstall' ) );

class BALLISTIX_SO_BUNDLE {

	private static $instance = null;

	public static function get_instance() {
		if ( ! isset( self::$instance ) )
			self::$instance = new self;

		return self::$instance;
	}

	private function __construct() {

		add_filter('siteorigin_widgets_widget_folders', array(&$this, 'ballistix_so_bundle_folder'));

	}

	public function ballistix_so_bundle_folder($folders){

    	$folders[] = dirname(__FILE__) . '/widgets/';

    	return $folders;
	}

	public static function activate() {}

	public static function deactivate() {}


	public static function uninstall() {
		if ( __FILE__ != BALLISTIX_SO_BUNDLE )
			return;
	}

}
