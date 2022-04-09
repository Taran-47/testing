<?php
	function getSectionsFromCourse($courseID)
	{
		include_once abstractGetSection;
		$query = abstractGetSection('s.course_id = "'.$courseID.'"');
		include_once queryTable;
		$sections = queryTable($query);
		return $sections;
	}
?>
