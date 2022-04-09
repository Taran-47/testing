<?php
function defineResearchVariables($research)
{
  $personID = trim($research->person_id);
  $researchURL = trim($research->research_url);
  $researchTitle = trim($research->research_title);
  $args = [
    "personID" => $personID,
    "researchURL" => $researchURL,
    "researchTitle" => $researchTitle,
  ];
  return $args;
}
 ?>
