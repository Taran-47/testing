<?php
	include 'getCourseInfo.php';
		echo '<div class = "course">';
			echo '<h3>'.$courseID.' '.$title.' ('.$credits.')</h3>';
			echo '<p>'.$description.'</p>';
			echo '<h4>Sections</h4>';
			if (!empty($sections))
			{
				echo '<ul>';
				foreach ($sections as $section) {
					include 'getSectionInfo.php';
					echo '<li><h5>'.$courseID.'-'.$sectionID.' '.$title.' ('.$credits.')</h5></li>';
					echo '<ul>';
					echo '<li>'.$semester.' '.$year.'</li>';
					echo '<li>'.$day.' '.$startTime.' - '.$endTime.'</li>';
					if (!empty($people))
					{
						foreach ($people as $person)
						{
							if ($instructorID = trim($person->person_id))
							{
								include 'getPersonInfo.php';
								echo '<li><b>Instructor: </b>'.$fullName.'</li>';
								break;
							}
						}
					}
					include_once 'formatContactInfo.php';
					echo '<li>'.$startDate.' - '.$endDate.'</li>';
					echo '<li>'.$location.' - '.$instructionMethod.'</li>';
					echo '<li><b>Syllabus: </b>'.$SyllabusURL.'</li>';
					echo '<li><b>Website: </b>'.formatContactInfo($websiteURL, 'link').'</li>';

					echo '</ul>';
				}
				echo '</ul>';
			} else
			{
				echo '<b>No Sections are currently available for this course.</b>';
			}
		echo '</div>';
?>
