<?php
function getProgramsFromType($type)
{
  include_once abstractGetProgram;
  $query = abstractGetProgram('p.type = "'.$type.'"');
  include_once queryTable;
  $programs = queryTable($query);
  return $programs;
}
 ?>
