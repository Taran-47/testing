<?php
	function getGradSections()
	{
		include_once abstractGetSection;
		$query = abstractGetSection("s.course_id LIKE 'G%'");
		include_once queryTable;
		$sections = queryTable($query);
		return $sections;
	}
?>
