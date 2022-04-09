<?php
function courseBuilder()
{
  if (!isset( $_GET[courseUrlParameter['course']]))
  {
    include_once errorHandler;
    return errorHandler('course', 'noinput');
  }
  $courseID = $_GET[courseUrlParameter['course']];
  include_once getCourseFromID;
  $course = getCourseFromID($courseID);
  if (empty($course))
  {
    include_once errorHandler;
    return errorHandler('course', 'nocourse');
  }
  include_once getCourseVariables;
  $args = defineCourseVariables($course);
  include_once getSectionsFromCourse;
  $sections = getSectionsFromCourse($courseID);
  include_once coursesSectionListBuilder;
  $args["sectionList"] = coursesSectionListBuilder($sections, $course);
  return render_php(course_item_html, $args);
}
 ?>
