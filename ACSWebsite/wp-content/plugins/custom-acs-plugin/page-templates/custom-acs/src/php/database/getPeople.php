<?php
	function getPeople()
	{
		include_once abstractGetPerson;
		$query = abstractGetPerson();
		include_once queryTable;
		$people = queryTable($query);
		return $people;
	}
?>
