<?php
function abstractGetSection($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(sectionSelect)),
                            "section s",
                            $filter,
                            (include(sectionSort)));
}

 ?>
