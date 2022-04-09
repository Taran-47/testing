<?php
function abstractGetResearch($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(researchSelect)),
                            "person_has_research r",
                            $filter//,
                          /*(include(researchSort))*/);
}

?>
