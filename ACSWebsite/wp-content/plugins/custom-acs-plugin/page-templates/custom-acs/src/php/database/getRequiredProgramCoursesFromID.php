<?php
	function getRequiredProgramCoursesFromID($programID)
	{
		include_once abstractGetRequiredProgramCourse;
		$query = abstractGetRequiredProgramCourse('program_id = "'.$programID.'"');
		include_once queryTable;
		$requiredProgramCourses = queryTable($query);
		return $requiredProgramCourses;
	}
?>
