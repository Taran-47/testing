<?php
	include 'getPersonInfo.php';
		echo '<div class = "person">';
			echo '<div class = "profile">';
				echo '<img src="'.$profileURL.'"
							alt="Profile picture of '.$fullName.'">';
			echo '</div>';
			echo '<div class = "info">';
				echo '<h4>'.$fullTitle.'</h4>';
				echo '<ul>';
					echo '<ul><b>Role: </b>'.$role.'</ul>';
					echo '<address>';
						include_once 'formatContactInfo.php';
						echo '<ul><b>Office: </b>'.$office.'</ul>';
						echo '<ul><b>Phone: </b>'.formatContactInfo($phone, 'phone').'</ul>';
						echo '<ul><b>Email: </b>'.formatContactInfo($email, 'email').'</ul>';
						echo '<ul><b>Website: </b>'.formatContactInfo($website).'</ul>';
					echo '</address>';
				echo '</ul>';
			echo '</div>';
			if (!empty($research))
			{
				echo '<div class = "Research">';
					echo '<h4>Research</h4>';
					echo '<ul>';
						foreach($research as $researchItem) {
							echo '<li><a href="'.$researchItem.'">'.$researchItem.'</a></li>';
						}
					echo '</ul>';
				echo '</div>';
			}
			if ($biography != constant("DEFAULT"))
			{
				echo '<div class = "biography">';
					echo '<h4>Biography</h4>';
					echo '<p>'.$biography.'</p>';
				echo '</div>';
			}
			$courses = $courses;
			include_once "createSectionsTaught.php";

			//createSectionsTaught($courses);
		echo '</div>';
?>
