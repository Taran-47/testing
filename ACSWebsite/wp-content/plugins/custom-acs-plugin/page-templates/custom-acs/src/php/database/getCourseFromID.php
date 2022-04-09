<?php
	function getCourseFromID($courseID)
	{
		include_once abstractGetCourse;
		$query = abstractGetCourse('course_id = "'.$courseID.'"');
		include_once queryRow;
		$course = queryRow($query);
		return $course;
	}
?>
