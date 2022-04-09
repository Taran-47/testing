<?php
	function getCourseFromSection($courses, $sections)
	{
		$courseBuffer = [];
		//$efficiency = 0;
		//print_r($sections);
		foreach ($sections as $section)
		{
			//$efficiency++;
			if ($section->course_id != constant("DEFAULT"))
			{
				$courseSaved = false;
				foreach ($courseBuffer as $course)
				{
					//$efficiency++;
					if (trim($course->course_id) == trim($section->course_id))
					{
						$courseSaved = true;
						include 'createSectionForPerson.php';
						break;
					}
				}
				if ($courseSaved == true) continue;
				foreach ($courses as $courseKey => $course)
				{
					//$efficiency++;
					unset($courses[$courseKey]); //boosts efficiency by removing already checked entries
					if (trim($course->course_id) == trim($section->course_id))
					{
						array_push($courseBuffer, $course);
						include 'createSectionForPerson.php';
						break;
					}
				}
			}
			//include 'getSectionInfo.php';
			//include 'createSectionTaught.php';
			//echo 'EFFICIENCY IS: '.$efficiency;
		}
	}
?>
