<?php
function defineSectionVariables($section)
{
	$courseID = trim($section->course_id);
	$sectionID = trim($section->section_id);
	$year = trim($section->year);
	$semester = ucwords(strtolower(trim($section->semester)), "/");
	$day = cleanResults($section->day);
	if ((trim($section->start_time)) < (trim($section->end_time)))
	{
		$startTime = date_format(date_create(cleanResults($section->start_time)), "g:i A");
		$endTime = date_format(date_create(cleanResults($section->end_time)), "g:i A");
	} else {
		$startTime = constant("DEFAULT");
		$endTime = constant("DEFAULT");
	}
	$sectionSchedule = $semester.' '.$year.($day == constant("DEFAULT") ? '' : ' - '.$day);
	if ($startTime != constant("DEFAULT") && $endTime != constant("DEFAULT"))
	{
		$sectionTime = $startTime.' - '.$endTime;
		$sectionSchedule .= ' '.$sectionTime;
	}
	if ((trim($section->start_date)) < (trim($section->end_date)))
	{
		$startDate = date_format(date_create(cleanResults($section->start_date)), "F j Y");
		$endDate = date_format(date_create(cleanResults($section->end_date)), "F j Y");
		$sectionDate = $startDate.' - '.$endDate;
	} else {
		$startDate = constant("DEFAULT");
		$endDate = constant("DEFAULT");
		$sectionDate = "No date currently available";
	}

	$location = cleanResults($section->location);
	$instructionMethod = cleanResults($section->instruction_method);
	$instructorID = cleanResults($section->instructor_id);
	$syllabusFile = cleanResults($section->syllabus_file);
	$websiteURL = cleanResults($section->website_url);
	$syllabusURL = ($syllabusFile != constant("DEFAULT") && file_exists("./wp-content/uploads/".trim($syllabusFile).".pdf") ? "../wp-content/uploads/".$syllabusFile.".pdf" : constant("DEFAULT"));
	$args = [
		"courseID" => $courseID,
		"sectionID" => $sectionID,
		"year" => $year,
		"semester" => $semester,
		"day" => $day,
		"startTime" => $startTime,
		"endTime" => $endTime,
		"sectionTime" => $sectionTime,
		"sectionSchedule" => $sectionSchedule,
		"startDate" => $startDate,
		"endDate" => $endDate,
		"sectionDate" => $sectionDate,
		"location" => $location,
		"instructionMethod" => $instructionMethod,
		"instructorID" => $instructorID,
		"syllabusFile" => $syllabusFile,
		"websiteURL" => $websiteURL,
		"syllabusURL" => $syllabusURL,
		//"" => $,
	];

	return $args;
}
?>
