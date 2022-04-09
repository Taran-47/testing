<?php
function abstractGetCourseInfo($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(courseInfoSelect)),
                            "course_info i",
                            $filter,
                            (include(courseInfoSort)));
}

?>
