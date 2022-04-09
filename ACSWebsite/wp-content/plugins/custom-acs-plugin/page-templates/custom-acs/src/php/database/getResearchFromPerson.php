<?php
	function getResearchFromPerson($personID)
	{
		include_once abstractGetResearch;
		$query = abstractGetResearch('r.person_id = "'.$personID.'"');
		include_once queryTable;
		$research = queryTable($query);
		return $research;
	}
?>
