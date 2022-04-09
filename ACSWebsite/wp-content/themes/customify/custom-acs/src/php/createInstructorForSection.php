<?php
function createInstructorForSection($person)
{
  include_once getPersonVariables;
  $args = definePersonVariables($person);
  return $args["fullName"];
}
 ?>
