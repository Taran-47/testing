<?php
function courseBuilder()
{
  if (isset( $_GET['c']))
  {
    $courseID = $_GET['c'];
    include_once getCourseFromID;
    $course = getCourseFromID($courseID);
    if (!empty($course))
    {
      include_once getCourseVariables;
      $args = defineCourseVariables($course);
      include_once getSectionsFromCourse;
      $sections = getSectionsFromCourse($courseID);
      include_once coursesSectionListBuilder;
      $args["sectionList"] = coursesSectionListBuilder($sections, $course);
      return render_php(course_item_html, $args);
    } else {
      return file_get_contents(course_html_error_nocourse);
    }
  } else {
    return file_get_contents(course_html_error_noinput);
  }
}
 ?>
