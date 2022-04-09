<?php
function abstractGetRequiredProgramCourse($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(requiredProgramCourseSelect)),
                            "program_requires_course r",
                            $filter,
                            (include(requiredProgramCourseSort)));
}

?>
