<?php
//function createSectionsTaught($courses) {
	if (!empty($sections))
	{
		echo '<div class = "sections-content">';
			echo '<h3>Sections Taught</h3>';
			echo '<div class = "sections-list">';
				include 'getCoursefromSection.php';
				getCourseFromSection($courses, $sections);
			echo '</div>';
		echo '</div>';
	}
//}
?>
