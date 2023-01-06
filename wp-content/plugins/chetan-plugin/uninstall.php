<?php

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

// Write uninstall use cases
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'Book';");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (select id from wp_posts);");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id from wp_posts)");
