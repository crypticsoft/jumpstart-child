<?php
/*-------------------------------------------------------*/
/* Run Theme Blvd framework (required)
/*-------------------------------------------------------*/

require_once( get_template_directory() . '/framework/themeblvd.php' );

/*-------------------------------------------------------*/
/* Start Child Theme
/*-------------------------------------------------------*/

add_action('themeblvd_header_addon', 'todoubled_header_addon');

function todoubled_header_addon() {
	$site_title = '<div class="site-title">' . get_bloginfo() . '</div>';
	$site_description = '<div class="site-description">' . get_bloginfo('description') . '</div>';
	echo $site_title . $site_description;
}
