<?php
	function getSection($courseID, $sectionID, $year, $semester)
	{
		global $wpdb;
		$query = 'SELECT s.course_id, s.section_id, s.year,
										s.semester, s.day, s.start_time,
										s.end_time, s.start_date, s.end_date,
										s.location, s.instruction_method, s.instructor_id,
										s.syllabus_file, s.website_url
							FROM section s
							WHERE active = 1
								AND course_id = "'.$courseID.'"
								AND section_id = "'.$sectionID.'"
								AND year = "'.$year.'"
								AND semester = "'.$semester.'"';
		$section = $wpdb->get_row($query);
		return $section;
	}
?>
