<?php
	include 'getSectionInfo.php';
	include 'getCourseInfo.php';
	//echo '<a href="../person?p='.$personID.'">';
		echo '<div class = "section">';
			echo '<b>'.$courseID.'-'.$sectionID.' '.$title.' ('.$credits.')</b>';
			echo '<ul>';
				echo '<li>'$semester.' '.$day.' '.$startTime.'-'.$endTime.'</li>';
				echo '<li>'.$startDate.'-'.$endDate.'</li>';
				echo '<li>'.$location.' - '.$instructionMethod.'</li>';
			echo '</ul>';
		echo '</div>';
	//echo '</a>';
?>
