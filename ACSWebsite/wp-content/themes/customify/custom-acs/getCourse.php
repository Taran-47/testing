<?php
	function getCourse($courseID)
	{
		global $wpdb;
		$query = 'SELECT c.course_id, c.title, c.credits,
							c.description
							FROM course c
							WHERE active = 1 AND course_id = "'.$courseID.'"';
		$course = $wpdb->get_row($query);
		return $course;
	}
?>
