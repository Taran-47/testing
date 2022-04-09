<?php
include_once getGradCourses;
$courses = getGradCourses();
include_once coursesBuilder;
$args["content"] = coursesBuilder($courses);
echo render_php(grad_courses_html, $args);
 ?>
