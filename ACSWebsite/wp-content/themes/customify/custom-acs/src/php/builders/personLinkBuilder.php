<?php
function personLinkBuilder($personID)
{
  include_once getPersonFromID;
  $person = getPersonFromID($personID);
  include_once getPersonVariables;
  $args = definePersonVariables($person);
  if ($args["personID"] == constant("DEFAULT"))
  {
    return $args["personID"];
  }
  return render_php(person_link_html, $args);
}
 ?>
