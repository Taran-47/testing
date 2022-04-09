<?php
	function getSection($courseID, $sectionID, $year, $semester)
	{
		include_once abstractGetSection;
		$query = abstractGetSection('course_id = "'.$courseID.'"
																AND section_id = "'.$sectionID.'"
																AND year = "'.$year.'"
																AND semester = "'.$semester.'"');
		include_once queryRow;
		$section = queryRow($query);
		return $section;
	}
?>
