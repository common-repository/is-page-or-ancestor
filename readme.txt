=== Is Page or Ancestor ===
Contributors: Derek Herman
Tags: page, is_page, subpage, ancestor, child
Requires at least: 2.5
Tested up to: 3.0
Stable Tag: 1.1

Recursively test if the page you pass into this function is the current page or ancestor of that page.

== Description ==

This plugin is easy to use and very basic in its concept. It will recursively test if the page you pass into this function is the current page or ancestor of that page. You can pass either a page ID or page name and it will return true or false. For example, if I wanted to test that the current page I'm viewing is the About page or one of its ancestors, I would then use the following code to echo `current_page_item` if the function returns true.

`<?php if (is_page_or_ancestor('about')) { echo 'current_page_item'; } ?>`

== Installation ==

To install, simply unzip the download provided and follow these steps:

1. Place the `is-page-or-ancestor` folder into your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

To uninstall the plugin, please perform the following steps.

1. Deactivate the plugin through the 'Plugins' menu in WordPress
2. If desired, remove the `is-page-or-ancestor` folder from your `/wp-content/plugins/` directory

== Changelog ==

= 1.1 =
* Fixed Wrong datatype for second argument error 

= 1.0.1 =
* Modified how the plugin gets ancestors

= 1.0.0 =
* Initial Release

== Upgrade Notice ==

= 1.1 =
* Fixed Wrong datatype for second argument error