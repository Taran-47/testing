<?php
function personSectionLinkBuilder($section)
{
  include_once getSectionVariables;
  $args = defineSectionVariables($section);
  include_once getCourseFromID;
  $course = getCourseFromID(trim($section->course_id));
  include_once getCourseVariables;
  $args = array_merge($args, defineCourseVariables($course));
  $args["sectionTitle"] = $args["courseID"]."-".$args["sectionID"]." ".$args["courseTitle"]." (".$args["courseCredits"].")";
  //if ($args["personID"] == constant("DEFAULT"))
  //{
  //  return $args["sectionTitle"];
  //}
  return render_php(courses_section_link_html, $args);
}
 ?>
