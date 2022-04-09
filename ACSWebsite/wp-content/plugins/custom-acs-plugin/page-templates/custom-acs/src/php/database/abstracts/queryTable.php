<?php
function queryTable($query) {
	global $wpdb;
  $results = $wpdb->get_results($query);
	return $results;
}
 ?>
