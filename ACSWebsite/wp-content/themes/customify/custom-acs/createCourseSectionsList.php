<?php
		$numberOfSections = 0;
		if (!empty($sections))
		{
			echo '<ul>';
			foreach ($sections as $sectionKey => $section)
			{
				if (trim($section->course_id) == trim($course->course_id))
				{
					$numberOfSections++;
					include 'getSectionInfo.php';
					echo '<li>'.$courseID.'-'.$sectionID.' '.$title.' ('.$credits.')</li>';
					echo '<ul>';
						echo '<li>'.$semester.' '.$year.' - '.$day.' '.$startTime.' - '.$endTime.'</li>';
						echo '<li>Instructor: ';
						include 'getInstructorForSection.php';
						echo '</li>';
					echo '</ul>';
					unset($sections[$sectionKey]);
				}
			}
			echo '</ul>';
		}
		if ($numberOfSections == 0)
		{
			echo '<h6>There are no sections of this course currently offered.</h5>';
		}
?>
