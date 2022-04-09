<?php
	function getCourseFromSection($courseID)
	{
		include_once abstractGetCourse;
		$query = abstractGetCourses('course_id = "'.$courseID.'"');
		include_once queryRow;
		$course = queryRow($query);
		return $course;
	}
?>
