<?php
function createCoursesList($courses, $sections, $people)
{
  $output = '';
  foreach ($courses as $course)
  {
    include_once getCourseVariables;
    $args = defineCourseVariables($course);
    include_once createCourseSectionsList;
    $sectionList = createCourseSectionsList($sections, $course, $people, $args);
    $args["sectionList"] = $sectionList;
    $output = $output.render_php(courseslist, $args);
  }
  return $output;
}
 ?>
