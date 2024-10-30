<?php
/*
Plugin Name: Is Page or Ancestor
Plugin URI: http://valendesigns.com
Description: Recursively test if the page you pass into this function is the current page or ancestor of that page.
Author: Derek Herman
Version: 1.0.1
Author URI: http://valendesigns.com/

The code is released under GPL:
http://www.opensource.org/licenses/gpl-license.php

*/

/**
 * The parameter can contain the page ID, or page name
 *
 * @since 1.0
 * @uses $post
 * @uses $wpdb
 *
 * @param mixed $page Either int or string
 * @return bool
 */
 
if (!function_exists('is_page_or_ancestor')) {
  function is_page_or_ancestor($page = '') 
  { 
    global $post, $wpdb;
    
    // If is not numeric get page ID
  	if (!is_numeric($page)) {
      $page = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page."' AND post_type = 'page'");
  	}
    
    // Recursive search through page hierarchy
    if (is_page($page) || in_array($page, $post->ancestors)) {
     return true;
    }
    return false;
  }
}

?>