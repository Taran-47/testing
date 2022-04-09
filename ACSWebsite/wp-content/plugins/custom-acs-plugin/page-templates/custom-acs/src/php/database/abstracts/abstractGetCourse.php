<?php
function abstractGetCourse($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(courseSelect)),
                            "course c",
                            $filter,
                            (include(courseSort)));
}

?>
