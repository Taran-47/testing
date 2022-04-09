<?php
function personPageBuilder()
{
  if (isset($_GET['p']))
  {
    $personID = $_GET['p'];
    include_once getPersonFromID;
    $person = getPersonFromID($personID);
    if (!empty($person))
    {
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
    } else {
      return file_get_contents(person_html_error_noperson);
    }
  } else {
    return file_get_contents(person_html_error_noinput);
  }
}




 ?>
