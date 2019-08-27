<?php
/*
Plugin Name: Sample plugin
Plugin URI: https://www.bc.fi
Description: This is a sample plugin that prints out hello world message
Version: 1.0.10
Author: The sample team
Author URI: http://we-have-no-website.com
Text Domain: health-check
Domain Path: /languages

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

add_action('login_head', 'pth_hello_world');
/**
 * print out hello world message
 */
function pth_hello_world() {
    echo '<h1>hello world</h1>';
}

// add_action('login_head', 'pth_remove_shake_js');
/**
 * remove wp_shake_js from the login page
 * to disable shaking animation of login panel
 */
function pth_remove_shake_js() {
    remove_action( 'login_head', 'wp_shake_js', 12);
}

add_filter('login_headerurl', 'pth_modify_headerurl');
/**
 * return the replacement headerurl
 */
function pth_modify_headerurl(){
    return 'www.bc.fi';
}

add_filter('login_errors', 'pth_modify_error_message');
/**
 * modify the error message so that it wouldn't review
 * confidential info by mistake
 */
function pth_modify_error_message() {
    return 'Nice try but that was not it!';
}

