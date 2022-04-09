<?php
function coursesCourseListBuilder($courses)
{
  include_once coursesCourseListItemBuilder;
  $args["courseList"] = '';
  foreach ($courses as $course)
  {
    $args["courseList"] = $args["courseList"].coursesCourseListItemBuilder($course);
  }
  if (empty($args["courseList"]))
  {
    return file_get_contents(courses_course_list_html_error_nocourses);
  }
  return render_php(courses_course_list_html, $args);
}
 ?>
