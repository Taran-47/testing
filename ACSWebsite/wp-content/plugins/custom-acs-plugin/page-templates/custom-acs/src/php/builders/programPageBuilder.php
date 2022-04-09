<?php
function programPageBuilder()
{
  if (isset( $_GET[programUrlParameter['program']]) == false)
  {
    include_once errorHandler;
    return errorHandler('program', 'noinput');
  }
  $programID = $_GET[programUrlParameter['program']];
  include_once getProgramFromID;
  $program = getProgramFromID($programID);

  if (empty($program))
  {
    include_once errorHandler;
    return errorHandler('program', 'noprogram');
  }
  include_once defineProgramVariables;
  $args = defineProgramVariables($program);
  print_r($args["requiredProgramCourses"]);
  include_once requiredProgramCoursesBuilder;
  $args["requiredProgramCourses"] = requiredProgramCoursesBuilder($args["programID"]);
  return render_php(program_item_html, $args);
}
 ?>
