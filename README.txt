=== RandomRSS ===
Contributors: (paydelete)
Donate link: https://paydelete.com/donate
Tags: RSS, Syndication, Auto-Blogging
Requires at least: 3.0.1
Tested up to: 6.0.0
Stable tag: 1.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

RandomRSS creates a Really Simple Syndication (RSS) feed featuring up to 10 posts selected at random. 

== Description ==

RandomRSS is a Wordpress Plugin that helps webmasters with content syndication. It creates a Really Simple Syndication (RSS) feed featuring up to 10 posts selected at random with optional filtering parameters.

Filtering parameters allow users to filter the content of their RandomRSS feed by category or tag using query strings. They are also given the option to change the pubDate field from the date the post was originally published to the current date and time.

To view your RandomRSS feed simply load the URL /wp-content/plugins/randomrss/feed.php into your browser. To filter by category simply append "?category=category_name" to that URL. To filter by tag simply append "?tag=tag" to the URL. If you want to filter by category and tag simply append both to the URL like so "?category=category_name&tag=tag".

To change the pubDate to the current date/time simply append "?pubdate=new" to the URL. If the URL already has a different query string you will need to append it like this "&pubdate=new".


NEW: To filter by date range append strings specifying the earliest and latest dates you want. That can be done with the "datemin" and "datemax" strings which support the YYYY-MM-DD format.

If you want everything after a specific date (ex: June 18, 2016) simply append "datemin=2016-06-18" or if you want everything before a specific date (ex: May 20, 2021) simply appened "?datemax=2021-05-21" and if you want to set both append something like "?datemin=2016-06-18&datemax-2021-05-21" with the & character only being used when appending more than one string.


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `randomrss.zip` by logging into your Wordpress blog '/wp-admin/' and selecting the add new plugin option 'wp-admin/plugin-install.php'
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I syndicate RSS feed content?

Download an auto-blogging plugin that supports RSS aggregation. Then you will simply need to create a new RSS campaign using the URL of your RandomRSS feed.

We recommend WP-Automatic from Code Canyon which you can find at https://codecanyon.net/item/wordpress-automatic-plugin/1904470 

= What if I don't want to pay for an auto-blogging plugin?

Then we recommend WPeMatico from etruel which you can find at https://wordpress.org/plugins/wpematico/