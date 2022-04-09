<?php
	function getPersonFromID($personID)
	{
		include_once abstractGetPerson;
		$query = abstractGetPerson('p.person_id ="'.$personID.'"');
		include_once queryRow;
		$people = queryRow($query);
		return $people;
	}
?>
