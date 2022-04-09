<?php
function abstractGetProgram($filter = '') {
  include_once abstractGetRequest;
  return abstractGetRequest((include(programSelect)),
                            "program p",
                            $filter//,
                            //(include(programSort))
                          );
}

 ?>
