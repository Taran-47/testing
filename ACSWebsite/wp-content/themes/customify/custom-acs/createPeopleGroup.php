<?php
	function createPeopleGroup($people, $group = false, $removePerson = true)
	{
		//$removePerson = ($group == false && $removePerson == false ? true : false);
		if ($group == false && $removePerson == false) $removePerson = true;
		echo '<div class = "people-group-container">';
		foreach ($people as $currentPerson => $person)
		{
			if ($group == false || $person->group == $group)
			{
				include 'createPersonTile.php';
				if ($removePerson) unset($people[$currentPerson]);
			}
		}
		echo '</div>';
		return $people;
	}
?>
