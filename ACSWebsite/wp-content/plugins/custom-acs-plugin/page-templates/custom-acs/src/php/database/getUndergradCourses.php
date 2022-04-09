<?php
	function getUndergradCourses()
	{
		include_once abstractGetCourse;
		$query = abstractGetCourse("c.course_id LIKE 'A%' AND c.course_id NOT LIKE '%L'");
		include_once queryTable;
		$courses = queryTable($query);
		return $courses;
	}
?>
