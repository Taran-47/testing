<?php
	function getSections()
	{
		include_once abstractGetSection;
		$query = abstractGetSection();
		include_once queryTable;
		$sections = queryTable($query);
		return $sections;
	}
?>
