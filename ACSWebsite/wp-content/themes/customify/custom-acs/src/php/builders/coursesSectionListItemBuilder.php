<?php
function coursesSectionListItemBuilder($section, $course)
{
  if (trim($section->course_id) != trim($course->course_id))
  {
    return '';
  }
  include_once getSectionVariables;
  $args = defineSectionVariables($section);
  include_once coursesSectionLinkBuilder;
  $args["sectionTitle"] = coursesSectionLinkBuilder($section);
  $args["instructorLink"] = $args["instructorID"];
  if ($args["instructorID"] != constant("DEFAULT"))
  {
    include_once personLinkBuilder;
    $args["instructorLink"] = personLinkBuilder($args["instructorID"]);
  }
  return render_php(courses_section_list_item_html, $args);
}
 ?>
