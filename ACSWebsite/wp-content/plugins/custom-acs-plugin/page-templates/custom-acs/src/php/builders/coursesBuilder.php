<?php
function coursesBuilder($courses)
{
  if (empty($courses))
  {
    include_once errorHandler;
    return errorHandler('courses', 'noresults');
  }
  include_once coursesCourseListBuilder;
  $args["courseList"] = coursesCourseListBuilder($courses);
  return render_php(courses_html, $args);
}
 ?>
