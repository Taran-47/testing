<?php
function defineCourseVariables($course)
{
	$courseID = trim($course->course_id);
	$courseTitle = cleanResults($course->title);
	$courseCredits = cleanResults($course->credits);
	$courseDescription = cleanResults($course->description);
	$courseFullTitle = $courseID." ".$courseTitle." (".$courseCredits.")";
	$args = [
		"courseID" => $courseID,
		"courseTitle" => $courseTitle,
		"courseCredits" => $courseCredits,
		"courseDescription" => $courseDescription,
		"courseFullTitle" => $courseFullTitle,
	];

	return $args;
}
?>
