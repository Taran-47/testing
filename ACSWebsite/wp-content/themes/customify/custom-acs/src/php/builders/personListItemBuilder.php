<?php
function personListItemBuilder($person)
{
  include_once getPersonVariables;
  $args = definePersonVariables($person);
  //include_once getSectionsFromPerson;
  //$sections = getSectionsFromPerson($args["personID"]);
  //include_once personsSectionListBuilder;
  ///$args["sectionList"] = personsSectionListBuilder($sections, $person);
  return render_php(person_list_item_html, $args);
}
 ?>
