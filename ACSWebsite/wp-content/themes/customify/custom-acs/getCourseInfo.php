<?php
	include_once 'cleanResults.php';
	$courseID = trim($course->course_id);
	$title = cleanResults($course->title);
	$credits = cleanResults($course->credits);
	$description = cleanResults($course->description);
?>
