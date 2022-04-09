<?php
function coursesSectionListItemBuilder($section, $course, $people, $args)
{
  if (trim($section->course_id) != trim($course->course_id))
  {
    return '';
  }
  include_once getSectionVariables;
  $args = array_merge($args, defineSectionVariables($section));
  $args["instructorLink"] = $args["instructorID"];
  include_once coursesSectionLinkBuilder;
  $args["sectionLink"] = coursesSectionLinkBuilder($section);
  if ($args["instructorID"] != constant("DEFAULT"))
  {
    include_once personLinkBuilder;
    $args["instructorLink"] = personLinkBuilder($args["instructorID"]);
  }

  //include_once sectionInstructor;
  //$instructor = sectionInstructor($args["instructorID"], $people);
  //$args["instructor"] = $instructor;
  return render_php(sectionListItem, $args);
}
 ?>
