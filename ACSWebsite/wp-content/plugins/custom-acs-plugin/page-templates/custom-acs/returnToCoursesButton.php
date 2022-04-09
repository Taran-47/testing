<?php
  include_once 'genericButton.php';
  echo "<style>";
  include_once 'genericButton.css';
  echo "</style>";
  echo '<div class = "course-return-buttons">';
    genericButton('undergrad-courses', 'Undergraduate Courses');
    genericButton('grad-courses', 'Graduate Courses');
  echo '</div>';
?>
