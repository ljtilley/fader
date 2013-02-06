<?php
/*
Plugin Name: Luke's Custom Fader
Plugin URI: http://luketilley.com/fader
Description: There was no simple text fader plugin so I wrote one.
Version: The Plugin's Version Number: 0.1
Author: Luke Tilley
Author URI: http://luketilley.com
License: GPL2
*/

/*  Copyright 2013  Luke Tilley  (email : luketilley@gmail.com)

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

function fade($atts, $content = null)
{
	$outcomes = explode(', ', $content);
	wp_register_script ('faderjs', plugins_url('js/fader.js', __FILE__));
	wp_enqueue_script ('faderjs');
	wp_localize_script ('faderjs', 'outcomes', $outcomes);
	$return_string .= '<div id="fader">
		<p>some cool text</p>
		</div>';
	return $return_string;
}

add_shortcode('fader', 'fade');
?>