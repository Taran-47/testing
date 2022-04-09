<?php
function getPrograms()
{
  include_once abstractGetProgram;
  $query = abstractGetProgram();
  include_once queryTable;
  $programs = queryTable($query);
  return $programs;
}
 ?>
