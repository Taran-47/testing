<?php
function requiredProgramCourseBuilder($requiredProgramCourse)
{
  include_once requiredProgramCourseParser;
  $args["requiredProgramCourse"] = requiredProgramCourseParser($requiredProgramCourse->required_course_description);
  return render_php(required_program_course_html, $args);
}
 ?>
