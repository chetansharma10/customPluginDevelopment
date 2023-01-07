<?php
/**
 * @package Chetan-Plugin
 */
/*
Plugin Name: Chetan Plugin
Plugin URI: https://chetansharma10.github.io/
Description: Just a custom plugin...
Requires at least: 5.0
Requires PHP: 5.2
Version:1.0
Author: Chetan
Author URI: https://chetansharma10.github.io/Portfolio/
License: GPLv2 or later
Text Domain: chetan-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2022 Automattic, Inc.
*/

// Make Sure our plugin is safe from attacks
if(!function_exists('add_action')){
    echo "You cannot access our file,silly !";
    die; 
}

// Inject the autoload for ease of imports
if(file_exists(dirname(__FILE__)."/vendor/autoload.php")){
    require_once dirname(__FILE__) . "/vendor/autoload.php";
}

// Import the classes
use Includes\Activate;
use Includes\Deactivate;


// Initialize the constants
define( 'CHETAN_PLUGIN_VERSION', '5.0.1' );
define( 'CHETAN_PLUGIN__MINIMUM_WP_VERSION', '5.0' );
define( 'CHETAN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CHETAN_PLUGIN_DELETE_LIMIT', 10000 );

// When activate is link is clicked,Activate the plugin
register_activation_hook(__FILE__, [Activate::class, 'activate']);
add_action( 'init', array( Activate::class, 'activate' ) );

// When deactivate is link is clicked,Deactivate the plugin
register_activation_hook(__FILE__, [Deactivate::class, 'deactivate']);




