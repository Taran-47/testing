<?php
function getProgramFromID($programID)
{
  include_once abstractGetProgram;
  $query = abstractGetProgram('p.program_id = "'.$programID.'"');
  include_once queryRow;
  $program = queryRow($query);
  return $program;
}
 ?>
