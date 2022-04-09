<?php
function queryRow($query) {
	global $wpdb;
  $results = $wpdb->get_row($query);
  return $results;
}
 ?>
