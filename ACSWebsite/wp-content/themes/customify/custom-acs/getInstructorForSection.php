<?php
	$instructorFound = false;
	if (!empty($people))
	{
		foreach ($people as $person)
		{
			if ($instructorID == trim($person->person_id))
			{
				include 'createInstructorForSection.php';
				$instructorFound = true;
				break;
			}
		}
	}
	if ($instructorFound == false) {
		echo $instructorID;
	}
?>
