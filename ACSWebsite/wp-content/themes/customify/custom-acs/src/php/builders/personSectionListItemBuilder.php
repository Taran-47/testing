<?php
function personSectionListItemBuilder($section)
{
  include_once getCourseFromID;
  $course = getCourseFromID(trim($section->course_id));
  if (trim($section->course_id) != trim($course->course_id))
  {
    return '';
  }
  include_once getSectionVariables;
  $args = defineSectionVariables($section);
  include_once personSectionLinkBuilder;
  $args["sectionTitle"] = personSectionLinkBuilder($section);
  //$args["instructorLink"] = $args["instructorID"];
  //if ($args["instructorID"] != constant("DEFAULT"))
  //{
  //  include_once personLinkBuilder;
  //  $args["instructorLink"] = personLinkBuilder($args["instructorID"]);
  //}
  return render_php(person_section_list_item_html, $args);
}
 ?>
