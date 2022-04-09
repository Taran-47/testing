<?php
	function getSectionsFromCourse($courseID)
	{
		include_once 'sortSectionSQL.php';
		global $wpdb;
		$query = 'SELECT s.course_id, s.section_id, s.year,
										s.semester, s.day, s.start_time,
										s.end_time, s.start_date, s.end_date,
										s.location, s.instruction_method, s.instructor_id,
										s.syllabus_file, s.website_url
							FROM section s
							WHERE s.active = 1 AND s.course_id = "'.$courseID.'" '
							.sortSectionSQL();
		$sections = $wpdb->get_results($query);
		return $sections;
	}
?>
