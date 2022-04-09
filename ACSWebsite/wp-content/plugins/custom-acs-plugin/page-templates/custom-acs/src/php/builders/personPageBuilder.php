<?php
function personPageBuilder()
{
  if (!isset($_GET[personUrlParameter['person']]))
  {
    include_once errorHandler;
    return errorHandler('person', 'noinput');
  }
  $personID = $_GET[personUrlParameter['person']];
  include_once getPersonFromID;
  $person = getPersonFromID($personID);
  if (empty($person))
  {
    include_once errorHandler;
    return errorHandler('person', 'noperson');
  }
  include_once getPersonVariables;
  $args = definePersonVariables($person);
  include_once contactsBuilder;
  $args = contactsBuilder($args);
  include_once getResearchFromPerson;
  $research = getResearchFromPerson($personID);
  include_once researchListBuilder;
  $args["researchList"] = researchListBuilder($research, $person);
  include_once biographyBuilder;
  $args["personBiography"] = biographyBuilder($biography);
  include_once getSectionsFromPerson;
  $sections = getSectionsFromPerson($personID);
  include_once personSectionListBuilder;
  $args["sectionList"] = personSectionListBuilder($sections, $person);
  return render_php(person_item_html, $args);
}




 ?>
