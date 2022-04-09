<?php
function coursesCourseListItemBuilder($course)
{
  include_once getCourseVariables;
  $args = defineCourseVariables($course);
  include_once courseLinkBuilder;
  $args["courseLink"] = courseLinkBuilder($course);
  include_once getCourseInfoFromCourse;
  $courseInfo = getCourseInfoFromCourse($args["courseID"]);
  include_once coursesCourseInfoBuilder;
  $args["courseInfo"] = coursesCourseInfoBuilder($courseInfo);
  include_once getSectionsFromCourse;
  $sections = getSectionsFromCourse($args["courseID"]);
  include_once coursesSectionListBuilder;
  $args["sectionList"] = coursesSectionListBuilder($sections, $course);
  return render_php(courses_course_list_item_html, $args);
}
 ?>
