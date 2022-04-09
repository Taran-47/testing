<?php
function getProgramsFromStream($stream)
{
  include_once abstractGetProgram;
  $query = abstractGetProgram('p.stream = "'.$stream.'"');
  include_once queryTable;
  $programs = queryTable($query);
  return $programs;
}
 ?>
