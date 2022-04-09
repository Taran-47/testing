<?php
function coursesBuilder($courses)
{
  if (empty($courses))
  {
    return file_get_contents(courses_html_error_noresults);
  }
  include_once coursesCourseListBuilder;
  $args["courseList"] = coursesCourseListBuilder($courses);
  return render_php(courses_html, $args);
}
 ?>
