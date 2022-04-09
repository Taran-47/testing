<?php
	function getSectionsFromPerson($personID)
	{
		include_once 'sortSectionsSQL.php';
		global $wpdb;
		$query = 'SELECT s.course_id, s.section_id, s.year,
										s.semester, s.day, s.start_time,
										s.end_time, s.start_date, s.end_date,
										s.location, s.instruction_method,
										s.syllabus_file, s.website_url
							FROM section s
							WHERE s.active = 1 AND s.instructor_id = "'.$personID.'" '
							.sortSectionsSQL();
		$sections = $wpdb->get_results($query);
		return $sections;
	}
?>
