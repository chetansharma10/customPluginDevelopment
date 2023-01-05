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
