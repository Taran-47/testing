<?php
	function getUndergradCourses()
	{
		global $wpdb;
		$query = "SELECT c.course_id, c.title, c.credits, c.description
							FROM course c
							WHERE active = 1 AND c.course_id LIKE 'A%' AND c.course_id NOT LIKE '%L'";
		$courses = $wpdb->get_results($query);
		return $courses;
	}
?>
