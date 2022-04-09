<?php
	include 'getPersonInfo.php';
	echo '<a href="../person?p='.$personID.'">';
		echo '<div class = "person-tile">';
			echo '<div class = "profile">';
				echo '<img src="'.$profileURL.'"
							alt="Profile picture of '.$fullName.'">';
			echo '</div>';
			echo '<div class = "info">';
				echo '<div class = "title">';
					echo '<h4>'.$fullTitle.'</h4>';
				echo '</div>';
				echo '<span></span>';
				echo '<ul>';
					echo '<li><b>Role: </b>'.$role.'</li>';
					echo '<address>';
						include_once 'formatContactInfo.php';
						echo '<li><b>Office: </b>'.$office.'</li>';
						echo '<li><b>Phone: </b>'.formatContactInfo($phone, 'phone').'</li>';
						echo '<li><b>Email: </b>'.formatContactInfo($email, 'email').'</li>';
						echo '<li><b>Website: </b>'.formatContactInfo($website).'</li>';
					echo '</address>';
				echo '</ul>';
			echo '</div>';
		echo '</div>';
	echo '</a>';
?>
