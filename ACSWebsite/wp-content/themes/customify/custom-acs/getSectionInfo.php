<?php
	include_once 'cleanResults.php';
	$courseID = trim($section->course_id);
	$sectionID = trim($section->section_id);
	$year = trim($section->year);
	$semester = ucwords(strtolower(trim($section->semester)), "/");
	$day = cleanResults($section->day);
	$startTime = date_format(date_create(cleanResults($section->start_time)), "g:i A");
	$endTime = date_format(date_create(cleanResults($section->end_time)), "g:i A");
	$sectionTime = $startTime.' - '.$endTime;
	$startDate = date_format(date_create(cleanResults($section->start_date)), "F j Y");
	$endDate = date_format(date_create(cleanResults($section->end_date)), "F j Y");
	$sectionDate = $startTime.' - '.$endDate;
	$location = cleanResults($section->location);
	$instructionMethod = cleanResults($section->instruction_method);
	$instructorID = cleanResults($section->instructor_id);
	$syllabusFile = cleanResults($section->syllabus_file);
	$websiteURL = cleanResults($section->website_url);
	$syllabusURL = (file_exists("./wp-content/uploads/".trim($syllabusFile).".pdf") ? "../wp-content/uploads/".$syllabusFile.".pdf" : constant("DEFAULT_PROFILE"));
?>
