<?php
function getProgramsFromLength($length)
{
  include_once abstractGetProgram;
  $query = abstractGetProgram('p.length = "'.$length.'"');
  include_once queryTable;
  $programs = queryTable($query);
  return $programs;
}
 ?>
