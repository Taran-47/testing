<?php
function sectionPageBuilder()
{
  if (isset($_GET['section']) && isset($_GET['course']) && isset($_GET['year']) && isset($_GET['semester']))
  {
    $courseID = $_GET['course'];
    $sectionID = $_GET['section'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
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
      return file_get_contents(section_item_html_error_nosection);
    }
  } else {
    return file_get_contents(section_item_html_error_noinput);
  }
}
 ?>
