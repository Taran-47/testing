<?php
function abstractGetPerson($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(personSelect)),
                            "person p",
                            $filter,
                            (include(personSort)));
}

 ?>
