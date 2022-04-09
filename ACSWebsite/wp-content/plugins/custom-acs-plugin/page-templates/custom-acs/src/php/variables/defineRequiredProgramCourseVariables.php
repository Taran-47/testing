<?php
function defineRequiredProgramCourseVariables($required)
{
  $description = trim($info->required_course_description);
  $args = [
    "description" => $description,
  ];
  return $args;
}
 ?>
