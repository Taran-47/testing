<?php
function coursesSectionLinkBuilder($section)
{
  include_once getSectionVariables;
  $args = defineSectionVariables($section);
  $args["sectionTitle"] = $args["courseID"]."-".$args["sectionID"];
  //if ($args["personID"] == constant("DEFAULT"))
  //{
  //  return $args["sectionTitle"];
  //}
  return render_php(courses_section_link_html, $args);
}
 ?>
