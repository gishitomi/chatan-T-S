<?php

function count_user_posttype($userid,$posttype) {
global $wpdb;
$where = get_posts_by_author_sql($posttype, true, $userid,true);
$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
return $count;
}

?>