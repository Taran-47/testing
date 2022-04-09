<?php
	function getSectionsFromPerson($personID)
	{
		include_once abstractGetSection;
		$query = abstractGetSection('s.instructor_id = "'.$personID.'"');
		include_once queryTable;
		$sections = queryTable($query);
		return $sections;
	}
?>
