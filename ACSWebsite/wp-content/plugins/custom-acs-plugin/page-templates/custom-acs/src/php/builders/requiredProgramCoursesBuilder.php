<?php
function requiredProgramCoursesBuilder($programID)
{
  include_once getRequiredProgramCoursesFromID;
  $requiredProgramCourses = getRequiredProgramCoursesFromID($programID);
  if (empty($requiredProgramCourses))
  {
    return '';
  }
  include_once requiredProgramCourseBuilder;
  $args["requiredProgramCourseList"] = '';
  foreach ($requiredProgramCourses as $requiredProgramCourse)
  {
    $args["requiredProgramCourseList"] .= requiredProgramCourseBuilder($requiredProgramCourse);
  }
  if (empty($args["requiredProgramCourseList"]))
  {
    return '';
  }
  return render_php(required_program_courses_html, $args);
}
 ?>
