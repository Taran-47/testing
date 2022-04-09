<?php
function createUndergradCoursesPage($courses, $sections, $people)
{
  include_once createCoursesList;
  //(include_once(createUndergradCoursesPage_css).
  return createCoursesList($courses, $sections, $people);
}
 ?>
