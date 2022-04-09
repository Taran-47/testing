<?php
function sectionPageBuilder()
{

  if (isset($_GET[sectionUrlParameter['course']]) &&
      isset($_GET[sectionUrlParameter['section']]) &&
      isset($_GET[sectionUrlParameter['year']]) &&
      isset($_GET[sectionUrlParameter['semester']]))
  {
    $courseID = $_GET[sectionUrlParameter['course']];
    $sectionID = $_GET[sectionUrlParameter['section']];
    $year = $_GET[sectionUrlParameter['year']];
    $semester = $_GET[sectionUrlParameter['semester']];
    include_once getSection;
    $section = getSection($courseID, $sectionID, $year, $semester);
    if (!empty($section))
    {
      include_once getSectionVariables;
      include_once getCourseFromID;
      include_once getCourseVariables;
      $args = defineSectionVariables($section);
      $course = getCourseFromID($args["courseID"]);
      $args = array_merge($args, defineCourseVariables($course));
      include_once instructionMethodBuilder;
      $args["instructionmethodField"] = instructionMethodBuilder($args["instructionMethod"]);
      include_once sectionSyllabusBuilder;
      $args["syllabusField"] = sectionSyllabusBuilder($args["syllabusURL"]);
      include_once sectionWebsiteBuilder;
      $args["websiteField"] = sectionWebsiteBuilder($args["websiteURL"]);
      return render_php(section_item_html, $args);
    } else {
      include_once errorHandler;
      return errorHandler('section', 'nosection');
    }
  } else {
    include_once errorHandler;
    return errorHandler('section', 'noinput');
  }
}
 ?>
