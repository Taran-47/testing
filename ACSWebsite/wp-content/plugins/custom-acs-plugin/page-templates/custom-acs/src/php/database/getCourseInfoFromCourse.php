<?php
	function getCourseInfoFromCourse($courseID)
	{
		include_once abstractGetCourseInfo;
		$query = abstractGetCourseInfo('i.course_id = "'.$courseID.'"');
		include_once queryTable;
		$courseInfo = queryTable($query);
		return $courseInfo;
	}
?>
