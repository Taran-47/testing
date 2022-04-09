<?php
	function getUndergradSections()
	{
		include_once abstractGetSection;
		$query = abstractGetSection("s.course_id LIKE 'A%'");
		include_once queryTable;
		$sections = queryTable($query);
		return $sections;
	}
?>
