<?php
include_once getUndergradCourses;
$courses = getUndergradCourses();
include_once coursesBuilder;
$args["content"] = coursesBuilder($courses);
echo render_php(undergrad_courses_html, $args);
 ?>
