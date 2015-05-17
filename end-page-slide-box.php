<?php
/*
Plugin Name: End Page Slide Box
Plugin URI: http://graphicedit.com/blog/plugin/end-page-slide-box/
Description: End Page Slide Box
Version: 1.0.1
Author: GraphicEdit
Author URI: http://graphicedit.com/

	Copyright 2011  GraphicEdit  (email : contact@graphicedit.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// init
function end_page_slide_box_init() {
	
	
	$mib_path = plugins_url() . '/end-page-slide-box';
	
	wp_enqueue_style( 'mib_style', $mib_path . '/end-page-slide-box.css'); 
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'mib_js', $mib_path . '/end-page-slide-box.js');

	
	
}

function end_page_slide_box($atts, $content = null) {


 
   return '<span id="last"></span><div id="slidebox"><a class="close"></a>' . $content . '</div>';
}
	
	

/*-------------- settings ---------------------------------*/
add_action( 'init', 'end_page_slide_box_init' );//init
add_shortcode( 'EPSB', 'end_page_slide_box' );//[EPSB]xxx[/EPSB]

?>