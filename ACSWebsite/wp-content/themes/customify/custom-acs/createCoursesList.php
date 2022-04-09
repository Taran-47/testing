<?php
	foreach ($courses as $course) {
		include 'getCourseInfo.php';
		echo '<h4>'.$courseID.' '.$title.' ('.$credits.')</h4>';
		echo '<p>';
			echo $description;
		echo '</p>';
		echo '<h5>Sections</h5>';
		include 'createCourseSectionsList.php';
	}
?>
