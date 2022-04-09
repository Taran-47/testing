<?php
function peopleListItemBuilder($person)
{
  include_once getPersonVariables;
  $args = definePersonVariables($person);
  //include_once formatContactInfo;
  include_once contactsBuilder;
  $args = contactsBuilder($args);
  //include_once getSectionsFromPerson;
  //$sections = getSectionsFromPerson($args["personID"]);
  //include_once personsSectionListBuilder;
  //$args["sectionList"] = personsSectionListBuilder($sections, $person);
  return render_php(people_list_item_html, $args);
}
 ?>
